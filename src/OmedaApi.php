<?php

declare(strict_types=1);

namespace FMASites\Omeda;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class OmedaApi
{
    private readonly string $baseApiUrl;
    private readonly string $clientBaseApiUrl;

    public function __construct(?string $baseApiUrl = null, ?string $clientBaseApiUrl = null)
    {
        $this->baseApiUrl = $baseApiUrl ?? config('omeda.baseApiUrl') . config('omeda.brand');
        $this->clientBaseApiUrl = $clientBaseApiUrl ?? config('omeda.clientBaseApiUrl') . config('omeda.client');
    }

    // https://knowledgebase.omeda.com/omedaclientkb/brand-comprehensive-lookup-service
    public function brandComprehensiveLookup(): array|null
    {
        return Cache::remember('brandComprehensiveLookup', 28800, function () {
            return $this->makeGetRequest('comp/*') ?: null;
        });
    }

    // https://knowledgebase.omeda.com/omedaclientkb/customer-comprehensive-lookup-by-customer-id
    public function customerComprehensiveLookup(int|string $id): array|false
    {
        return $this->makeGetRequest("customer/$id/comp/*");
    }

    // https://knowledgebase.omeda.com/omedaclientkb/customer-lookup-by-email-address
    public function customerLookupByEmail(string $email): array|false
    {
        return $this->makeGetRequest("customer/email/$email/*");
    }

    // Part of Utility APIs, which is a separate bucket of permissions on the API key
    // https://knowledgebase.omeda.com/omedaclientkb/postal-info-lookup
    public function postalInfoLookup(string $zipCode): Response
    {
        $data = [
            'PostalInfo' => [
                ['ZipCode' => $zipCode],
            ],
        ];

        return $this->makePostRequest("postalinfo/*", $data);
    }

    // Part of Utility APIs, which is a separate bucket of permissions on the API key
    // https://knowledgebase.omeda.com/omedaclientkb/run-processor
    public function runProcessor(array $transactionIds)
    {
        return $this->makePostRequest("runprocessor/*", [
            'Process' => [['TransactionId' => $transactionIds]],
        ]);
    }

    public function storeCustomerAndOrder(array $data): Response
    {
        return $this->makePostRequest("storecustomerandorder/*", $data);
    }

    // https://knowledgebase.omeda.com/omedaclientkb/transaction-lookup
    public function transactionLookup(int|string $transactionId): array|false
    {
        return $this->makeGetRequest("transaction/$transactionId/*");
    }

    // https://knowledgebase.omeda.com/omedaclientkb/email-optin-queue
    public function emailOptinQueue(string $email, string|array $deploymentTypeId, array $options = [])
    {
        $data = [
            'DeploymentTypeOptIn' => [
                array_merge([
                    'EmailAddress' => $email,
                    'DeploymentTypeId' => $deploymentTypeId,
                ], $options),
            ],
        ];

        return $this->makePostRequest("optinfilterqueue/*", $data, $this->clientBaseApiUrl);
    }

    private function makeGetRequest(string $endpoint, ?string $baseUrl = null): array|false
    {
        $url = ($baseUrl ?? $this->baseApiUrl) . "/$endpoint";
        $response = Http::withHeaders([
            'content-type' => 'application/json',
            'x-omeda-appid' => config('omeda.appId'),
        ])->get($url);

        // Not found will be 404 and not successful.
        // More than one customer will be 300 - also not successful.
        if ($response->successful()) {
            return $response->json();
        }
        return false;
    }

    private function makePostRequest(string $endpoint, array $data, ?string $baseUrl = null): Response
    {
        $url = ($baseUrl ?? $this->baseApiUrl) . "/$endpoint";

        // Return the response and let the calling function decide how to handle it
        return Http::withHeaders([
            'content-type' => 'application/json',
            'x-omeda-appid' => config('omeda.appId'),
            "x-omeda-inputid" => config('omeda.inputId'),
        ])->post($url, $data);
    }
}
