<?php

namespace FMASites\Omeda;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class OmedaApi
{
    public readonly string $baseApiUrl;

    public function __construct(?string $baseApiUrl = null)
    {
        $this->baseApiUrl = $baseApiUrl ?? config('omeda.baseApiUrl') . config('omeda.brand');
    }

    // https://knowledgebase.omeda.com/omedaclientkb/brand-comprehensive-lookup-service
    public function brandComprehensiveLookup()
    {
        return Cache::remember('brandComprehensiveLookup', 28800, function () {
            return $this->makeGetRequest('comp/*') ?: null;
        });
    }

    // https://knowledgebase.omeda.com/omedaclientkb/customer-comprehensive-lookup-by-customer-id
    public function customerComprehensiveLookup($id)
    {
        return $this->makeGetRequest("customer/$id/comp/*");
    }

    // https://knowledgebase.omeda.com/omedaclientkb/customer-lookup-by-email-address
    public function customerLookupByEmail($email)
    {
        return $this->makeGetRequest("customer/email/$email/*");
    }

    // Part of Utility APIs, which is a separate bucket of permissions on the API key
    // https://knowledgebase.omeda.com/omedaclientkb/postal-info-lookup
    public function postalInfoLookup($zipCode)
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

    public function storeCustomerAndOrder($data)
    {
        return $this->makePostRequest("storecustomerandorder/*", $data);
    }

    // https://knowledgebase.omeda.com/omedaclientkb/transaction-lookup
    public function transactionLookup($transactionId)
    {
        return $this->makeGetRequest("transaction/$transactionId/*");
    }

    public function makeGetRequest($endpoint)
    {
        $url = "$this->baseApiUrl/$endpoint";
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

    public function makePostRequest($endpoint, $data)
    {
        $url = "$this->baseApiUrl/$endpoint";

        // Return the response and let the calling function decide how to handle it
        return Http::withHeaders([
            'content-type' => 'application/json',
            'x-omeda-appid' => config('omeda.appId'),
            "x-omeda-inputid" => config('omeda.inputId'),
        ])->post($url, $data);
    }
}
