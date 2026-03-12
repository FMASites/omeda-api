<?php

namespace FMASites\Omeda\Tests\DataAdapter;

use FMASites\Omeda\DataAdapter;
use FMASites\Omeda\Tests\MockOmedaApiServiceResponse;
use PHPUnit\Framework\Attributes\Test;

class method_simplifyProductData extends class_DataAdapter
{
    #[Test]
    public function mapsEssentialFieldsOnly()
    {
        // Arrange
        $productsData = MockOmedaApiServiceResponse::brandComprehensiveLookup()['Products'];

        // Act
        $result = DataAdapter::simplifyProductData($productsData);

        // Assert
        // Maps each product
        $this->assertSameSize($productsData, $result);
        // Each product has only simplified fields
        for ($i = 0; $i < count($productsData); $i++) {
            // Each product has 6 defined properties
            $this->assertCount(6, $result[$i]);
            // Require values
            $this->assertTrue(isset($result[$i]['description']));
            $this->assertTrue(isset($result[$i]['id']));
            $this->assertTrue(isset($result[$i]['productType']));
            // Could be null but the key should be there
            $this->assertArrayHasKey('alternateId', $result[$i]);
            $this->assertArrayHasKey('frequency', $result[$i]);
            $this->assertArrayHasKey('frequencyType', $result[$i]);
        }
    }

    #[Test]
    public function setsNullableFieldsToNull_whenNoValueToMap()
    {
        // Arrange
        $productsData = MockOmedaApiServiceResponse::brandComprehensiveLookup()['Products'];
        unset($productsData[0]['AlternateId']);
        unset($productsData[0]['Frequency']);
        unset($productsData[0]['FrequencyType']);

        // Act
        $result = DataAdapter::simplifyProductData($productsData);

        // Assert
        $this->assertNull($result[0]['alternateId']);
        $this->assertNull($result[0]['frequency']);
        $this->assertNull($result[0]['frequencyType']);
    }
}
