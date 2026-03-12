<?php

namespace FMASites\Omeda\Tests\OmedaApi;

use FMASites\Omeda\OmedaApi;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\Attributes\Test;

class method_makeGetRequestTest extends class_OmedaApi
{
    #[Test]
    public function callsSpecifiedEndpointWithHeaders()
    {
        // Arrange
        Http::fake();
        $testEndpoint = 'test-endpoint';
        $api = new OmedaApi($this->testBaseApiUrl);

        // Act
        $result = $api->makeGetRequest($testEndpoint);

        // Assert
        Http::assertSent(function (Request $request) use ($testEndpoint) {
            return $request->url() === "$this->testBaseApiUrl/$testEndpoint"
                && $request->hasHeader('content-type', 'application/json')
                && $request->hasHeader('x-omeda-appid', $this->testOmedaAppId);
        });
    }

    #[Test]
    public function returnsArrayObjectResponse_onSuccess()
    {
        // Arrange
        $response = [
            'prop1' => 'value1',
            'prop2' => 'value2',
        ];
        Http::fake([
            '*' => Http::response($response, 200),
        ]);
        $api = new OmedaApi($this->testBaseApiUrl);

        // Act
        $result = $api->makeGetRequest('test-endpoint');

        // Assert
        $this->assertEquals($response, $result);
    }

    #[Test]
    public function returnsFalse_when404Response()
    {
        // Arrange
        Http::fake([
            '*' => Http::response([], 404)
        ]);
        $api = new OmedaApi($this->testBaseApiUrl);

        // Act
        $result = $api->makeGetRequest('test-endpoint');

        // Assert
        $this->assertFalse($result);
    }
}
