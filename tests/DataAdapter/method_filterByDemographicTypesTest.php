<?php

namespace FMASites\Omeda\Tests\DataAdapter;

use FMASites\Omeda\DataAdapter;
use FMASites\Omeda\Tests\MockOmedaApiServiceResponse;
use PHPUnit\Framework\Attributes\Test;

class method_filterByDemographicTypesTest extends class_DataAdapter
{
    #[Test]
    public function isEmptyArray_whenNoMatchingDemographicTypes()
    {
        // Arrange
        $rawDemographics = MockOmedaApiServiceResponse::brandComprehensiveLookup();

        // Act
        $result = DataAdapter::filterByDemographicTypes($rawDemographics, [1000]);

        // Assert
        $this->assertEmpty($result['Demographics']);
        $this->assertTrue(is_array($result['Demographics']));
    }

    #[Test]
    public function holdsOnlyDemographicTypesSpecified_whenMatchesExist()
    {
        // Act
        $result = DataAdapter::filterByDemographicTypes(MockOmedaApiServiceResponse::brandComprehensiveLookup(), [1, 2]);

        // Assert
        $this->assertEquals(count($result['Demographics']), 7);
    }
}
