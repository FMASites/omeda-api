<?php

namespace FMASites\Omeda;

class DataAdapter
{
    public static function filterByDemographicTypes($brandComprehensiveLookupData, $types)
    {
        $filteredDemographics = array_filter(
            $brandComprehensiveLookupData['Demographics'],
            function ($demographic) use ($types) {
                return in_array($demographic['DemographicType'], $types);
            },
        );

        $brandComprehensiveLookupData['Demographics'] = $filteredDemographics;

        return $brandComprehensiveLookupData;
    }

    public static function simplifyBrandComprehensiveLookupData($brandComprehensiveLookupData) {
        return [
            'brandAbbrev' => $brandComprehensiveLookupData['BrandAbbrev'],
            'demographics' => array_values($brandComprehensiveLookupData['Demographics']),
            'description' => $brandComprehensiveLookupData['Description'],
            'id' => $brandComprehensiveLookupData['Id'],
            'products' => self::simplifyProductData($brandComprehensiveLookupData['Products']),
        ];
    }

    public static function removeDemographicValueOptionsById($brandComprehensiveLookupData, $optionIds)
    {
        $brandComprehensiveLookupData['Demographics'] = array_map(
            function ($demographic) use ($optionIds) {
                $demographic['DemographicValues'] = array_values(
                    array_filter(
                        $demographic['DemographicValues'],
                        function ($demographicValue) use ($optionIds) {
                            return !in_array($demographicValue['Id'], $optionIds);
                        },
                    ),
                );
                return $demographic;
            },
            $brandComprehensiveLookupData['Demographics'],
        );

        return $brandComprehensiveLookupData;
    }

    public static function simplifyProductData($productsData)
    {
        return array_map(function ($productData) {
            return [
                'alternateId' => $productData['AlternateId'] ?? null,
                'description' => $productData['Description'],
                'frequency' => $productData['Frequency'] ?? null,
                'frequencyType' => $productData['FrequencyType'] ?? null,
                'id' => $productData['Id'],
                'productType' => $productData['ProductType'],
            ];
        }, $productsData);
    }
}
