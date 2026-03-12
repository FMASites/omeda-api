<?php

namespace FMASites\Omeda\Tests\DataAdapter;

use FMASites\Omeda\DataAdapter;
use FMASites\Omeda\Tests\MockOmedaApiServiceResponse;
use PHPUnit\Framework\Attributes\Test;

class method_removeDemographicValueOptionsByIdTest extends class_DataAdapter
{
    #[Test]
    public function removesDemographicOptions_whenIdsMatch()
    {
        // Arrange
        $brandComprehensiveLookupData = MockOmedaApiServiceResponse::brandComprehensiveLookup();
        // These should exist, or the count won't work
        $optionIds = [68, 4, 5, 423];
        $originalOptionCount = 0;
        foreach ($brandComprehensiveLookupData['Demographics'] as $demographic) {
            $originalOptionCount += count($demographic['DemographicValues']);
        }

        // Act
        $result = DataAdapter::removeDemographicValueOptionsById($brandComprehensiveLookupData, $optionIds);
        $reducedOptionCount = 0;
        foreach ($result['Demographics'] as $demographic) {
            $reducedOptionCount += count($demographic['DemographicValues']);
        }

        // Assert
        $this->assertEquals($originalOptionCount - count($optionIds), $reducedOptionCount);
    }

    #[Test]
    public function leavesDemographicOptionsAlone_whenIdsDoNotMatch()
    {
        // Arrange
        $brandComprehensiveLookupData = MockOmedaApiServiceResponse::brandComprehensiveLookup();
        // These should exist, or the count won't work
        $optionIds = [123456789, 987654321];
        $originalOptionCount = 0;
        foreach ($brandComprehensiveLookupData['Demographics'] as $demographic) {
            $originalOptionCount += count($demographic['DemographicValues']);
        }

        // Act
        $result = DataAdapter::removeDemographicValueOptionsById($brandComprehensiveLookupData, $optionIds);
        $reducedOptionCount = 0;
        foreach ($result['Demographics'] as $demographic) {
            $reducedOptionCount += count($demographic['DemographicValues']);
        }

        // Assert
        $this->assertEquals($originalOptionCount, $reducedOptionCount);
    }

    #[Test]
    public function DemographicValuesIndicesAreReset()
    {
        // Arrange
        $brandComprehensiveLookupData = MockOmedaApiServiceResponse::brandComprehensiveLookup();
        // Remove first value in first demo (index 0) so we can be sure the same index is a different value later
        $firstOptionId = $brandComprehensiveLookupData['Demographics'][0]['DemographicValues'][0]['Id'];

        // Act
        $result = DataAdapter::removeDemographicValueOptionsById($brandComprehensiveLookupData, [$firstOptionId]);

        // Assert
        $this->assertTrue(isset($result['Demographics'][0]['DemographicValues'][0]));
        $this->assertNotEquals($firstOptionId, $result['Demographics'][0]['DemographicValues'][0]['Id']);
    }
}
