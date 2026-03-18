<?php

namespace FMASites\Omeda\Tests\OmedaApi;

use FMASites\Omeda\OmedaApi;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\Attributes\Test;

class method_constructorTest extends class_OmedaApi
{
    #[Test]
    public function usesProvidedBaseApiUrl()
    {
        // Arrange
        Http::fake(['*' => Http::response([], 200)]);
        $testUrl = 'https://example.com/test-api';
        $api = new OmedaApi($testUrl);

        // Act
        $api->brandComprehensiveLookup();

        // Assert
        Http::assertSent(function (Request $request) use ($testUrl) {
            return str_starts_with($request->url(), $testUrl);
        });
    }

    #[Test]
    public function usesConfigBaseApiUrl_whenNoneProvided()
    {
        // Arrange
        Http::fake(['*' => Http::response([], 200)]);
        $api = new OmedaApi();

        // Act
        $api->brandComprehensiveLookup();

        // Assert
        Http::assertSent(function (Request $request) {
            return str_starts_with($request->url(), 'https://example.test/omeda/brand/fma-test');
        });
    }
}
