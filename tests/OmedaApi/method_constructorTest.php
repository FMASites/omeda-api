<?php

namespace FMASites\Omeda\Tests\OmedaApi;

use FMASites\Omeda\OmedaApi;
use PHPUnit\Framework\Attributes\Test;

class method_constructorTest extends class_OmedaApi
{
    #[Test]
    public function setsBaseApiUrl_whenProvided()
    {
        // Arrange
        $testUrl = 'https://example.com/test-api';

        // Act
        $omedaApi = new OmedaApi($testUrl);

        // Assert
        $this->assertEquals($testUrl, $omedaApi->baseApiUrl);
    }

    #[Test]
    public function setsDefaultBaseUrl_whenNoneProvided()
    {
        // Act
        $api = new OmedaApi();

        // Assert
        $this->assertEquals('https://example.test/omeda/brand/fma-test', $api->baseApiUrl);
    }
}
