<?php

namespace FMASites\Omeda\Tests\OmedaApi;

use FMASites\Omeda\OmedaApi;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\Attributes\Test;

class method_emailOptinQueueTest extends class_OmedaApi
{
    protected string $testClientBaseApiUrl = 'https://client.example.com/bogus';

    #[Test]
    public function usesClientBaseApiUrl()
    {
        // Arrange
        Http::fake(['*' => Http::response([], 200)]);
        $api = new OmedaApi(clientBaseApiUrl: $this->testClientBaseApiUrl);

        // Act
        $api->emailOptinQueue('test@example.com', 123);

        // Assert
        Http::assertSent(function (Request $request) {
            return str_starts_with($request->url(), $this->testClientBaseApiUrl);
        });
    }

    #[Test]
    public function sendsCorrectPayload()
    {
        // Arrange
        Http::fake(['*' => Http::response([], 200)]);
        $api = new OmedaApi(clientBaseApiUrl: $this->testClientBaseApiUrl);

        // Act
        $api->emailOptinQueue('test@example.com', 123);

        // Assert
        Http::assertSent(function (Request $request) {
            $body = $request->data();
            return $body['DeploymentTypeOptIn'][0]['EmailAddress'] === 'test@example.com'
                && $body['DeploymentTypeOptIn'][0]['DeploymentTypeId'] == 123;
        });
    }

    #[Test]
    public function mergesOptions()
    {
        // Arrange
        Http::fake(['*' => Http::response([], 200)]);
        $api = new OmedaApi(clientBaseApiUrl: $this->testClientBaseApiUrl);

        // Act
        $api->emailOptinQueue('test@example.com', 123, ['SomeOption' => 'value']);

        // Assert
        Http::assertSent(function (Request $request) {
            return $request->data()['DeploymentTypeOptIn'][0]['SomeOption'] === 'value';
        });
    }
}
