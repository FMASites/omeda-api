<?php

namespace FMASites\Omeda\Tests\OmedaApi;

use FMASites\Omeda\OmedaApi;
use PHPUnit\Framework\Attributes\Test;

class method_brandComprehensiveLookupTest extends class_OmedaApi
{
    #[Test]
    public function callsCorrectOmedaEndpoint()
    {
        // Arrange
        $omedaApi = $this->getMockBuilder(OmedaApi::class)
            ->onlyMethods(['makeGetRequest'])
            ->setConstructorArgs([$this->testBaseApiUrl])
            ->getMock();
        $omedaApi->method('makeGetRequest')->willReturn(OmedaResponse::$brandComprehensiveLookup);

        // Assert
        $omedaApi->expects($this->once())
            ->method('makeGetRequest')
            ->with('comp/*');

        // Act
        $omedaApi->brandComprehensiveLookup();
    }

    #[Test]
    public function returnsDataArray_onSuccess()
    {
        // Arrange
        $response = [
            'prop1' => 'value1',
        ];
        $omedaApi = $this->getMockBuilder(OmedaApi::class)
            ->onlyMethods(['makeGetRequest'])
            ->setConstructorArgs([$this->testBaseApiUrl])
            ->getMock();
        $omedaApi->expects($this->once())
            ->method('makeGetRequest')
            ->willReturn($response);

        // Act
        $result = $omedaApi->brandComprehensiveLookup();

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
        $omedaApi = $this->getMockBuilder(OmedaApi::class)
            ->onlyMethods(['makeGetRequest'])
            ->setConstructorArgs([$this->testBaseApiUrl])
            ->getMock();
        $omedaApi->expects($this->once())
            ->method('makeGetRequest')
            ->willReturn(false);

        // Act
        $result = $omedaApi->brandComprehensiveLookup();

        // Assert
        $this->assertNull($result);
    }
}
