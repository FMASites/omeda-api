<?php

namespace FMASites\Omeda\Tests\OmedaApi;

use FMASites\Omeda\OmedaApi;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\Attributes\Test;

class method_brandComprehensiveLookupTest extends class_OmedaApi
{
    #[Test]
    public function callsCorrectOmedaEndpointWithHeaders()
    {
        // Arrange
        Http::fake(['*' => Http::response([], 200)]);
        $api = new OmedaApi($this->testBaseApiUrl);

        // Act
        $api->brandComprehensiveLookup();

        // Assert
        Http::assertSent(function (Request $request) {
            return $request->url() === "$this->testBaseApiUrl/comp/*"
                && $request->hasHeader('content-type', 'application/json')
                && $request->hasHeader('x-omeda-appid', $this->testOmedaAppId);
        });
    }

    #[Test]
    public function returnsDataArray_onSuccess()
    {
        // Arrange
        $response = ['prop1' => 'value1'];
        Http::fake(['*' => Http::response($response, 200)]);
        $api = new OmedaApi($this->testBaseApiUrl);

        // Act
        $result = $api->brandComprehensiveLookup();

        // Assert
        $this->assertEquals($response, $result);
    }

    /**
     * By returning null (instead of a value like false), Laravel will not cache the result. We don't
     * want to cache a bad result.
     */
    #[Test]
    public function returnsNull_on404()
    {
        // Arrange
        Http::fake(['*' => Http::response([], 404)]);
        $api = new OmedaApi($this->testBaseApiUrl);

        // Act
        $result = $api->brandComprehensiveLookup();

        // Assert
        $this->assertNull($result);
    }
}