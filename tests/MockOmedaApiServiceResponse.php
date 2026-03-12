<?php

namespace FMASites\Omeda\Tests;

/***
 * Mocks of responses from the Laravel OmedaApi service provider. None of the specific data should be relied upon
 * to be accurate even though some instances were derived from actual responses. To save thousands of lines of code,
 * many large arrays have been trimmed down to representative elements.
 */
class MockOmedaApiServiceResponse
{

    /***
     * Simulates the data that Omeda returns from its API
     * @param $overrides
     * @return array
     */
    static function brandComprehensiveLookup(array $overrides = [])
    {
        $sampleResponse = [
            'Demographics' =>
                [
                    [
                        'Description' => 'CIM: CM/CFW Interest',
                        'DemoLegacyId' => '',
                        'Id' => 3,
                        'DemographicType' => 1,
                        'DemographicValues' =>
                            [
                                [
                                    'Description' => 'Cutting, Chipping, Machining',
                                    'Id' => 68,
                                    'AlternateId' => '1',
                                    'Sequence' => 66,
                                    'OmedaWebformText' => 'Cutting, Chipping, Machining',
                                    'ShortDescription' => 'Cutting, Chipping, Machining',
                                    'DemographicValueType' => 0,
                                ],
                                [
                                    'Description' => 'Fabricating & Welding',
                                    'Id' => 69,
                                    'AlternateId' => '2',
                                    'Sequence' => 67,
                                    'OmedaWebformText' => 'Fabricating & Welding',
                                    'ShortDescription' => 'Fabricating & Welding',
                                    'DemographicValueType' => 0,
                                ],
                            ],
                        'OmedaWebformText' => 'Which of the following are performed at your company?',
                    ],
                    [
                        'Description' => 'CIM: Job Function',
                        'DemoLegacyId' => '',
                        'Id' => 4,
                        'DemographicType' => 1,
                        'DemographicValues' =>
                            [
                                [
                                    'Description' => 'Owner',
                                    'Id' => 3,
                                    'AlternateId' => '1',
                                    'Sequence' => 1,
                                    'OmedaWebformText' => 'Owner',
                                    'ShortDescription' => 'Owner',
                                    'DemographicValueType' => 0,
                                ],
                                [
                                    'Description' => 'Corporate Executive',
                                    'Id' => 4,
                                    'AlternateId' => 'B',
                                    'Sequence' => 2,
                                    'OmedaWebformText' => 'Corporate Executive',
                                    'ShortDescription' => 'Corporate Executive',
                                    'DemographicValueType' => 0,
                                ],
                                [
                                    'Description' => 'Mfg Production Management',
                                    'Id' => 5,
                                    'AlternateId' => 'C',
                                    'Sequence' => 3,
                                    'OmedaWebformText' => 'Mfg Production Management',
                                    'ShortDescription' => 'Mfg Production Management',
                                    'DemographicValueType' => 0,
                                ],
                            ],
                        'OmedaWebformText' => 'Your principal job function',
                    ],
                    [
                        'Description' => 'FAB: Technologies/Interests',
                        'DemoLegacyId' => '',
                        'Id' => 13,
                        'DemographicType' => 2,
                        'DemographicValues' =>
                            [
                                [
                                    'Description' => 'Additive Manufacturing / 3D Printing',
                                    'Id' => 170,
                                    'AlternateId' => '55',
                                    'Sequence' => 168,
                                    'OmedaWebformText' => 'Additive Manufacturing / 3D Printing',
                                    'ShortDescription' => 'Additive Manufacturing / 3D Printing',
                                    'DemographicValueType' => 0,
                                ],
                                [
                                    'Description' => 'Arc Welding',
                                    'Id' => 171,
                                    'AlternateId' => '2',
                                    'Sequence' => 169,
                                    'OmedaWebformText' => 'Arc Welding',
                                    'ShortDescription' => 'Arc Welding',
                                    'DemographicValueType' => 0,
                                ],
                                [
                                    'Description' => 'Assembly',
                                    'Id' => 172,
                                    'AlternateId' => '3',
                                    'Sequence' => 170,
                                    'OmedaWebformText' => 'Assembly',
                                    'ShortDescription' => 'Assembly',
                                    'DemographicValueType' => 0,
                                ],
                            ],
                        'OmedaWebformText' => 'Technologies / Interests',
                    ],
                    [
                        'Description' => 'FAB: Total Employees',
                        'DemoLegacyId' => '',
                        'Id' => 14,
                        'DemographicType' => 1,
                        'DemographicValues' =>
                            [
                                [
                                    'Description' => '1 - 19',
                                    'Id' => 147,
                                    'AlternateId' => '0',
                                    'Sequence' => 145,
                                    'OmedaWebformText' => '1 - 19',
                                    'ShortDescription' => '1 - 19',
                                    'DemographicValueType' => 0,
                                ],
                                [
                                    'Description' => '20 - 49',
                                    'Id' => 148,
                                    'AlternateId' => '1',
                                    'Sequence' => 146,
                                    'OmedaWebformText' => '20 - 49',
                                    'ShortDescription' => '20 - 49',
                                    'DemographicValueType' => 0,
                                ],
                                [
                                    'Description' => '50 - 99',
                                    'Id' => 149,
                                    'AlternateId' => '2',
                                    'Sequence' => 147,
                                    'OmedaWebformText' => '50 - 99',
                                    'ShortDescription' => '50 - 99',
                                    'DemographicValueType' => 0,
                                ],
                            ],
                        'OmedaWebformText' => 'Total Employees at this Location',
                    ],
                    [
                        'Description' => 'FAB: Type of Company',
                        'DemoLegacyId' => '',
                        'Id' => 15,
                        'DemographicType' => 1,
                        'DemographicValues' =>
                            [
                                [
                                    'Description' => 'Business Service',
                                    'Id' => 154,
                                    'AlternateId' => '1',
                                    'Sequence' => 152,
                                    'OmedaWebformText' => 'Business Service',
                                    'ShortDescription' => 'Business Service',
                                    'DemographicValueType' => 0,
                                ],
                                [
                                    'Description' => 'Service Center/Metal Proceessor',
                                    'Id' => 155,
                                    'AlternateId' => '2',
                                    'Sequence' => 153,
                                    'OmedaWebformText' => 'Service Center/Metal Proceessor',
                                    'ShortDescription' => 'Service Center/Metal Proceessor',
                                    'DemographicValueType' => 0,
                                ],
                                [
                                    'Description' => 'Toll Processor',
                                    'Id' => 156,
                                    'AlternateId' => '13',
                                    'Sequence' => 154,
                                    'OmedaWebformText' => 'Toll Processor',
                                    'ShortDescription' => 'Toll Processor',
                                    'DemographicValueType' => 0,
                                ],
                            ],
                        'OmedaWebformText' => 'Type of Company',
                    ],
                    [
                        'Description' => 'FABTECH: FABTECH Technologies',
                        'DemoLegacyId' => '',
                        'Id' => 16,
                        'DemographicType' => 2,
                        'DemographicValues' =>
                            [
                                [
                                    'Description' => 'Brazing & Soldering',
                                    'Id' => 461,
                                    'AlternateId' => '10',
                                    'Sequence' => 459,
                                    'OmedaWebformText' => 'Brazing & Soldering',
                                    'ShortDescription' => 'Brazing & Soldering',
                                    'DemographicValueType' => 0,
                                ],
                                [
                                    'Description' => 'Additive Mfg/3D Printing',
                                    'Id' => 462,
                                    'AlternateId' => '1137',
                                    'Sequence' => 460,
                                    'OmedaWebformText' => 'Additive Mfg/3D Printing',
                                    'ShortDescription' => 'Additive Mfg/3D Printing',
                                    'DemographicValueType' => 0,
                                ],
                                [
                                    'Description' => 'Safety & Environmental',
                                    'Id' => 463,
                                    'AlternateId' => '1186',
                                    'Sequence' => 461,
                                    'OmedaWebformText' => 'Safety & Environmental',
                                    'ShortDescription' => 'Safety & Environmental',
                                    'DemographicValueType' => 0,
                                ],
                                [
                                    'Description' => 'Business Services',
                                    'Id' => 464,
                                    'AlternateId' => '1207',
                                    'Sequence' => 462,
                                    'OmedaWebformText' => 'Business Services',
                                    'ShortDescription' => 'Business Services',
                                    'DemographicValueType' => 0,
                                ],
                            ],
                        'OmedaWebformText' => 'Fabtech Tech to Evaluate',
                    ],
                    [
                        'Description' => 'FABTECH: Industry',
                        'DemoLegacyId' => '',
                        'Id' => 17,
                        'DemographicType' => 1,
                        'DemographicValues' =>
                            [
                                [
                                    'Description' => 'Aluminum',
                                    'Id' => 423,
                                    'AlternateId' => '25',
                                    'Sequence' => 421,
                                    'OmedaWebformText' => 'Aluminum',
                                    'ShortDescription' => 'Aluminum',
                                    'DemographicValueType' => 0,
                                ],
                                [
                                    'Description' => 'Aerospace',
                                    'Id' => 424,
                                    'AlternateId' => '2',
                                    'Sequence' => 422,
                                    'OmedaWebformText' => 'Aerospace',
                                    'ShortDescription' => 'Aerospace',
                                    'DemographicValueType' => 0,
                                ],
                                [
                                    'Description' => 'Agricultural',
                                    'Id' => 425,
                                    'AlternateId' => '1',
                                    'Sequence' => 423,
                                    'OmedaWebformText' => 'Agricultural',
                                    'ShortDescription' => 'Agricultural',
                                    'DemographicValueType' => 0,
                                ],
                            ],
                        'OmedaWebformText' => 'Fabtech Industry',
                    ],
                ],
            'Products' =>
                [
                    [
                        'DeploymentTypeId' => 3,
                        'Description' => 'Web Form Communication',
                        'ProductType' => 5,
                        'Id' => 2,
                        'AlternateId' => '',
                    ],
                    [
                        'Description' => 'The Fabricator',
                        'FrequencyType' => 'YR',
                        'Issues' =>
                            [
                                0 =>
                                    [
                                        'Description' => 'FMA_FAB 202001',
                                        'IssueDate' => '2020-01-01 00:00:00.0',
                                        'Id' => 100001,
                                        'AlternateId' => '202001',
                                        'StatusCode' => 30,
                                    ],
                                1 =>
                                    [
                                        'Description' => 'FMA_FAB 202002',
                                        'IssueDate' => '2020-02-01 00:00:00.0',
                                        'Id' => 100002,
                                        'AlternateId' => '202002',
                                        'StatusCode' => 30,
                                    ],
                                178 =>
                                    [
                                        'Description' => 'FMA_FAB 203411',
                                        'IssueDate' => '2034-11-01 00:00:00.0',
                                        'Id' => 100179,
                                        'AlternateId' => '203411',
                                        'StatusCode' => 0,
                                    ],
                                179 =>
                                    [
                                        'Description' => 'FMA_FAB 203412',
                                        'IssueDate' => '2034-12-01 00:00:00.0',
                                        'Id' => 100180,
                                        'AlternateId' => '203412',
                                        'StatusCode' => 0,
                                    ],
                            ],
                        'ProductType' => 1,
                        'Frequency' => 12,
                        'Id' => 3,
                        'AlternateId' => 'FMA_FAB',
                        'MarketingClasses' =>
                            [
                                0 =>
                                    [
                                        'Description' => 'Active Qualified',
                                        'ClassId' => '1',
                                        'Id' => 2,
                                        'StatusCode' => 'Active',
                                        'ShortDescription' => 'Active Qualified',
                                    ],
                                1 =>
                                    [
                                        'Description' => 'ACS Kills',
                                        'ClassId' => '10',
                                        'Id' => 7,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'ACS Kills',
                                    ],
                                2 =>
                                    [
                                        'Description' => 'Active Non-Qualified',
                                        'ClassId' => '2',
                                        'Id' => 3,
                                        'StatusCode' => 'Active',
                                        'ShortDescription' => 'Active Non-Qualified',
                                    ],
                                3 =>
                                    [
                                        'Description' => 'Expire Suspends',
                                        'ClassId' => '20',
                                        'Id' => 8,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Expire Suspends',
                                    ],
                                4 =>
                                    [
                                        'Description' => 'Future Starts',
                                        'ClassId' => '21',
                                        'Id' => 9,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Future Starts',
                                    ],
                                5 =>
                                    [
                                        'Description' => 'Postal Suspends',
                                        'ClassId' => '22',
                                        'Id' => 10,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Postal Suspends',
                                    ],
                                6 =>
                                    [
                                        'Description' => 'Credit Suspends',
                                        'ClassId' => '23',
                                        'Id' => 11,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Credit Suspends',
                                    ],
                                7 =>
                                    [
                                        'Description' => 'Requested Suspends',
                                        'ClassId' => '24',
                                        'Id' => 12,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Requested Suspends',
                                    ],
                                8 =>
                                    [
                                        'Description' => 'Kill/Refunds',
                                        'ClassId' => '25',
                                        'Id' => 13,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Kill/Refunds',
                                    ],
                                9 =>
                                    [
                                        'Description' => 'Non-Receiving Group Admin.',
                                        'ClassId' => '26',
                                        'Id' => 14,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Non-Receiving Group Admin.',
                                    ],
                                10 =>
                                    [
                                        'Description' => 'Non-Receiving Earning Admin.',
                                        'ClassId' => '27',
                                        'Id' => 15,
                                        'StatusCode' => 'Active',
                                        'ShortDescription' => 'Non-Receiving Earning Admin.',
                                    ],
                                11 =>
                                    [
                                        'Description' => 'Qualified Reserve',
                                        'ClassId' => '3',
                                        'Id' => 4,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Qualified Reserve',
                                    ],
                                12 =>
                                    [
                                        'Description' => 'Passalong',
                                        'ClassId' => '50',
                                        'Id' => 16,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Passalong',
                                    ],
                                13 =>
                                    [
                                        'Description' => 'Uncashed Refund Check',
                                        'ClassId' => '60',
                                        'Id' => 17,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Uncashed Refund Check',
                                    ],
                                14 =>
                                    [
                                        'Description' => 'Soft Controlled Kills',
                                        'ClassId' => '8',
                                        'Id' => 5,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Soft Controlled Kills',
                                    ],
                                15 =>
                                    [
                                        'Description' => 'Controlled Kills',
                                        'ClassId' => '9',
                                        'Id' => 6,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Controlled Kills',
                                    ],
                            ],
                    ],
                    [
                        'Description' => 'Canadian Metalworking / Canadian Fabricating & Welding',
                        'FrequencyType' => 'YR',
                        'Issues' =>
                            [
                            ],
                        'ProductType' => 1,
                        'Frequency' => 12,
                        'Id' => 4,
                        'AlternateId' => 'FMA_CIM',
                        'MarketingClasses' =>
                            [
                                0 =>
                                    [
                                        'Description' => 'Active Qualified',
                                        'ClassId' => '1',
                                        'Id' => 18,
                                        'StatusCode' => 'Active',
                                        'ShortDescription' => 'Active Qualified',
                                    ],
                                1 =>
                                    [
                                        'Description' => 'ACS Kills',
                                        'ClassId' => '10',
                                        'Id' => 23,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'ACS Kills',
                                    ],
                                2 =>
                                    [
                                        'Description' => 'Active Non-Qualified',
                                        'ClassId' => '2',
                                        'Id' => 19,
                                        'StatusCode' => 'Active',
                                        'ShortDescription' => 'Active Non-Qualified',
                                    ],
                                3 =>
                                    [
                                        'Description' => 'Expire Suspends',
                                        'ClassId' => '20',
                                        'Id' => 24,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Expire Suspends',
                                    ],
                                4 =>
                                    [
                                        'Description' => 'Future Starts',
                                        'ClassId' => '21',
                                        'Id' => 25,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Future Starts',
                                    ],
                                5 =>
                                    [
                                        'Description' => 'Postal Suspends',
                                        'ClassId' => '22',
                                        'Id' => 26,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Postal Suspends',
                                    ],
                                6 =>
                                    [
                                        'Description' => 'Credit Suspends',
                                        'ClassId' => '23',
                                        'Id' => 27,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Credit Suspends',
                                    ],
                                7 =>
                                    [
                                        'Description' => 'Requested Suspends',
                                        'ClassId' => '24',
                                        'Id' => 28,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Requested Suspends',
                                    ],
                                8 =>
                                    [
                                        'Description' => 'Kill/Refunds',
                                        'ClassId' => '25',
                                        'Id' => 29,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Kill/Refunds',
                                    ],
                                9 =>
                                    [
                                        'Description' => 'Non-Receiving Group Admin.',
                                        'ClassId' => '26',
                                        'Id' => 30,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Non-Receiving Group Admin.',
                                    ],
                                10 =>
                                    [
                                        'Description' => 'Non-Receiving Earning Admin.',
                                        'ClassId' => '27',
                                        'Id' => 31,
                                        'StatusCode' => 'Active',
                                        'ShortDescription' => 'Non-Receiving Earning Admin.',
                                    ],
                                11 =>
                                    [
                                        'Description' => 'Qualified Reserve',
                                        'ClassId' => '3',
                                        'Id' => 20,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Qualified Reserve',
                                    ],
                                12 =>
                                    [
                                        'Description' => 'Passalong',
                                        'ClassId' => '50',
                                        'Id' => 32,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Passalong',
                                    ],
                                13 =>
                                    [
                                        'Description' => 'Uncashed Refund Check',
                                        'ClassId' => '60',
                                        'Id' => 33,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Uncashed Refund Check',
                                    ],
                                14 =>
                                    [
                                        'Description' => 'Soft Controlled Kills',
                                        'ClassId' => '8',
                                        'Id' => 21,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Soft Controlled Kills',
                                    ],
                                15 =>
                                    [
                                        'Description' => 'Controlled Kills',
                                        'ClassId' => '9',
                                        'Id' => 22,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Controlled Kills',
                                    ],
                            ],
                    ],
                    [
                        'Description' => 'The Fabricator Newsletter',
                        'FrequencyType' => 'MO',
                        'ProductType' => 2,
                        'Frequency' => 1,
                        'Id' => 7,
                        'AlternateId' => '',
                        'MarketingClasses' =>
                            [
                                0 =>
                                    [
                                        'Description' => 'Active',
                                        'ClassId' => '1',
                                        'Id' => 66,
                                        'StatusCode' => 'Active',
                                        'ShortDescription' => 'Active',
                                    ],
                                1 =>
                                    [
                                        'Description' => 'Suspend',
                                        'ClassId' => '11',
                                        'Id' => 68,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Suspend',
                                    ],
                                2 =>
                                    [
                                        'Description' => 'Promotional',
                                        'ClassId' => '12',
                                        'Id' => 69,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Promotional',
                                    ],
                                3 =>
                                    [
                                        'Description' => 'Inactive',
                                        'ClassId' => '9',
                                        'Id' => 67,
                                        'StatusCode' => 'Inactive',
                                        'ShortDescription' => 'Inactive',
                                    ],
                            ],
                    ],
                    [
                        'Description' => 'FABTECH',
                        'ProductType' => 3,
                        'Id' => 8,
                        'AlternateId' => '',
                    ],
                ],
            'Description' => 'FMA Communications',
            'ContactTypes' =>
                [
                    0 =>
                        [
                            'Description' => 'Work',
                            'Id' => 100,
                        ],
                    1 =>
                        [
                            'Description' => 'Residence',
                            'Id' => 110,
                        ],
                    2 =>
                        [
                            'Description' => 'Work',
                            'Id' => 200,
                        ],
                    3 =>
                        [
                            'Description' => 'Residential',
                            'Id' => 210,
                        ],
                    4 =>
                        [
                            'Description' => 'Mobile',
                            'Id' => 230,
                        ],
                    5 =>
                        [
                            'Description' => 'Fax',
                            'Id' => 240,
                        ],
                    6 =>
                        [
                            'Description' => 'Foreign Phone',
                            'Id' => 250,
                        ],
                    7 =>
                        [
                            'Description' => 'Foreign Fax',
                            'Id' => 260,
                        ],
                    8 =>
                        [
                            'Description' => 'Pager',
                            'Id' => 270,
                        ],
                    9 =>
                        [
                            'Description' => 'Work',
                            'Id' => 300,
                        ],
                    10 =>
                        [
                            'Description' => 'Personal',
                            'Id' => 310,
                        ],
                ],
            'Id' => 12345,
            'DeploymentTypes' =>
                [
                    0 =>
                        [
                            'Description' => 'Web Form Communication',
                            'LongDescription' => 'Messages sent from webforms.',
                            'Id' => 3,
                            'AlternateId' => 'WA',
                            'StatusCode' => 1,
                            'Name' => 'Web Form Communication',
                        ],
                ],
            'CustomerCount' => 78303,
            'BrandAbbrev' => 'FMA',
        ];

        return array_merge($sampleResponse, $overrides);
    }

    /***
     * Sample data as seen in Omeda documentation:
     * https://knowledgebase.omeda.com/omedaclientkb/customer-comprehensive-lookup-by-customer-id#CustomerComprehensiveLookupByCustomerId-Success
     * Supplemented with a few more subscriptions to help round out testability.
     * @return array
     */
    static function getMockCustomerComprehensiveLookupByCustomerId()
    {
        return [
            'Customer' => 'https://ows.omedastaging.com/webservices/rest/brand/FOO/customer/12345/*',
            'Id' => 12345,
            'FirstName' => 'John',
            'MiddleName' => 'J',
            'LastName' => 'Smith',
            'Title' => 'Developer',
            'SignUpDate' => '2016-03-12 00:00:00',
            'ChangedDate' => '2016-03-15 07:56:40',
            'StatusCode' => 1,
            'MergeCode' => 1,
            'GlobalMinChangedDate' => '2011-05-19 09:30:11.233',
            'Addresses' => [
                [
                    'Id' => 478928,
                    'AddressContactType' => 100,
                    'Company' => 'Omeda',
                    'Street' => '555 Huehl Road',
                    'City' => 'Northbrook',
                    'RegionCode' => 'IL',
                    'Region' => 'Illinois',
                    'PostalCode' => '60062',
                    'CountryCode' => 'USA',
                    'Country' => 'United States',
                    'StatusCode' => 1,
                    'ChangedDate' => '2016-03-08 21:23:34',
                ],
                [
                    'Id' => 589129,
                    'AddressContactType' => 110,
                    'Street' => '123 Walters Avenue',
                    'City' => 'Northbrook',
                    'RegionCode' => 'IL',
                    'PostalCode' => '60062',
                    'CountryCode' => 'USA',
                    'Country' => 'United States',
                    'StatusCode' => 2,
                    'ChangedDate' => '2016-03-08 21:23:34',
                ],
            ],
            'Emails' => [
                [
                    'Id' => 472187,
                    'EmailContactType' => 300,
                    'EmailAddress' => 'jsmith@omeda.com',
                    'StatusCode' => 1,
                    'ChangedDate' => '2016-03-08 21:23:34',
                ],
                [
                    'Id' => 472690,
                    'EmailContactType' => 310,
                    'EmailAddress' => 'jsmith@domain.com',
                    'StatusCode' => 2,
                    'ChangedDate' => '2016-03-08 21:23:34',
                ],
            ],
            'PhoneNumbers' => [
                [
                    'Id' => 472517,
                    'PhoneContactType' => 200,
                    'PhoneNumber' => '8475648900',
                    'Extension' => '999',
                    'StatusCode' => 1,
                    'ChangedDate' => '2016-03-08 21:23:34',
                ],
                [
                    'Id' => 472518,
                    'PhoneContactType' => 210,
                    'PhoneNumber' => '8475648901',
                    'StatusCode' => 2,
                    'ChangedDate' => '2016-03-08 21:23:34',
                ],
            ],
            'CustomerDemographics' => [
                [
                    'Id' => 4201612,
                    'DemographicId' => 100,
                    'DemographicType' => 1,
                    'ValueId' => 192,
                    'ChangedDate' => '2016-03-08 21:23:34',
                ],
                [
                    'Id' => 4201613,
                    'DemographicId' => 101,
                    'DemographicType' => 3,
                    'ValueText' => 'Turquoise',
                    'ChangedDate' => '2016-03-08 21:23:34',
                ],
                [
                    'Id' => 4201614,
                    'DemographicId' => 116,
                    'DemographicType' => 6,
                    'ValueDate' => '2016-04-13 10:02:23',
                    'ChangedDate' => '2016-03-08 21:23:34',
                ],
            ],
            'Subscriptions' => [
                // From Omeda sample:
                [
                    'Id' => 8,
                    'ProductId' => 7,
                    'RequestedVersion' => 'P',
                    'MarketingClassId' => '1',
                    'MarketingClassDescription' => 'Active Qualified',
                    'Receive' => 1,
                    'Quantity' => 1,
                    'DataLockCode' => 0,
                    'ChangedDate' => '2016-03-08 21:23:34',
                    'ShippingAddressId' => 123673467,
                    'EmailAddressId' => 22176763,
                ],
                // Supplemental scenarios
                // Active digital
                [
                    'Id' => 9,
                    'ProductId' => 3,
                    'RequestedVersion' => 'D',
                    'MarketingClassId' => '1',
                    'MarketingClassDescription' => 'Active Qualified',
                    'Receive' => 1,
                    'Quantity' => 1,
                    'DataLockCode' => 0,
                    'ChangedDate' => '2016-03-08 21:23:34',
                    'ShippingAddressId' => 123673467,
                    'EmailAddressId' => 22176763,
                ],
                // Qualified reserve
                [
                    'Id' => 10,
                    'ProductId' => 4,
                    'RequestedVersion' => 'D',
                    'MarketingClassId' => '3',
                    'MarketingClassDescription' => 'Qualified Reserve',
                    'Receive' => 1,
                    'Quantity' => 1,
                    'DataLockCode' => 0,
                    'ChangedDate' => '2016-03-08 21:23:34',
                    'ShippingAddressId' => 123673467,
                    'EmailAddressId' => 22176763,
                ],
                [
                    'Id' => 11,
                    'ProductId' => 9,
                    'RequestedVersion' => 'D',
                    'MarketingClassId' => '4',
                    'MarketingClassDescription' => 'Soft Controlled Kills',
                    'Receive' => 0,
                    'Quantity' => 1,
                    'DataLockCode' => 0,
                    'ChangedDate' => '2016-03-08 21:23:34',
                    'ShippingAddressId' => 123673467,
                    'EmailAddressId' => 22176763,
                ],
            ],
            'ExternalIds' => [
                [
                    'Id' => '478928',
                    'Namespace' => 'SALESFORCE',
                ],
                [
                    'Id' => 'GH1GG4D56J211',
                    'Namespace' => 'LINKEDIN',
                ],
            ],
            'EncryptedCustomerId' => '',
            'GlobalMaxChangedDate' => '2012-01-31 16:05:22.58',
            'SubmissionId' => '80F4C688-9404-4A28-B175-D5116A1DFBF9',
        ];
    }

    /***
     * Simulates the processed Omeda brand reference data in the shape it is sent to the view.
     * @param array $overrides
     * @return array
     */
    static function getMockBrandReferences(array $overrides = [])
    {
        $sampleReferences = [
            'brandAbbrev' => 'FMA',
            'demographics' => [
                0 =>
                    [
                        'Description' => 'CIM: CM/CFW Interest',
                        'DemoLegacyId' => '',
                        'Id' => 3,
                        'DemographicType' => 1,
                        'DemographicValues' =>
                            [
                                0 =>
                                    [
                                        'Description' => 'Cutting, Chipping, Machining',
                                        'Id' => 68,
                                        'AlternateId' => '1',
                                        'Sequence' => 66,
                                        'OmedaWebformText' => 'Cutting, Chipping, Machining',
                                        'ShortDescription' => 'Cutting, Chipping, Machining',
                                        'DemographicValueType' => 0,
                                    ],
                                1 =>
                                    [
                                        'Description' => 'Fabricating & Welding',
                                        'Id' => 69,
                                        'AlternateId' => '2',
                                        'Sequence' => 67,
                                        'OmedaWebformText' => 'Fabricating & Welding',
                                        'ShortDescription' => 'Fabricating & Welding',
                                        'DemographicValueType' => 0,
                                    ],
                            ],
                        'OmedaWebformText' => 'Which of the following are performed at your company?',
                    ],
                1 =>
                    [
                        'Description' => 'CIM: Job Function',
                        'DemoLegacyId' => '',
                        'Id' => 4,
                        'DemographicType' => 1,
                        'DemographicValues' =>
                            [
                                0 =>
                                    [
                                        'Description' => 'Owner',
                                        'Id' => 3,
                                        'AlternateId' => '1',
                                        'Sequence' => 1,
                                        'OmedaWebformText' => 'Owner',
                                        'ShortDescription' => 'Owner',
                                        'DemographicValueType' => 0,
                                    ],
                                1 =>
                                    [
                                        'Description' => 'Corporate Executive',
                                        'Id' => 4,
                                        'AlternateId' => 'B',
                                        'Sequence' => 2,
                                        'OmedaWebformText' => 'Corporate Executive',
                                        'ShortDescription' => 'Corporate Executive',
                                        'DemographicValueType' => 0,
                                    ],
                                2 =>
                                    [
                                        'Description' => 'Mfg Production Management',
                                        'Id' => 5,
                                        'AlternateId' => 'C',
                                        'Sequence' => 3,
                                        'OmedaWebformText' => 'Mfg Production Management',
                                        'ShortDescription' => 'Mfg Production Management',
                                        'DemographicValueType' => 0,
                                    ],
                            ],
                        'OmedaWebformText' => 'Your principal job function',
                    ],
                10 =>
                    [
                        'Description' => 'FAB: Technologies/Interests',
                        'DemoLegacyId' => '',
                        'Id' => 13,
                        'DemographicType' => 2,
                        'DemographicValues' =>
                            [
                                0 =>
                                    [
                                        'Description' => 'Additive Manufacturing / 3D Printing',
                                        'Id' => 170,
                                        'AlternateId' => '55',
                                        'Sequence' => 168,
                                        'OmedaWebformText' => 'Additive Manufacturing / 3D Printing',
                                        'ShortDescription' => 'Additive Manufacturing / 3D Printing',
                                        'DemographicValueType' => 0,
                                    ],
                                1 =>
                                    [
                                        'Description' => 'Arc Welding',
                                        'Id' => 171,
                                        'AlternateId' => '2',
                                        'Sequence' => 169,
                                        'OmedaWebformText' => 'Arc Welding',
                                        'ShortDescription' => 'Arc Welding',
                                        'DemographicValueType' => 0,
                                    ],
                                2 =>
                                    [
                                        'Description' => 'Assembly',
                                        'Id' => 172,
                                        'AlternateId' => '3',
                                        'Sequence' => 170,
                                        'OmedaWebformText' => 'Assembly',
                                        'ShortDescription' => 'Assembly',
                                        'DemographicValueType' => 0,
                                    ],
                            ],
                        'OmedaWebformText' => 'Technologies / Interests',
                    ],
                11 =>
                    [
                        'Description' => 'FAB: Total Employees',
                        'DemoLegacyId' => '',
                        'Id' => 14,
                        'DemographicType' => 1,
                        'DemographicValues' =>
                            [
                                0 =>
                                    [
                                        'Description' => '1 - 19',
                                        'Id' => 147,
                                        'AlternateId' => '0',
                                        'Sequence' => 145,
                                        'OmedaWebformText' => '1 - 19',
                                        'ShortDescription' => '1 - 19',
                                        'DemographicValueType' => 0,
                                    ],
                                1 =>
                                    [
                                        'Description' => '20 - 49',
                                        'Id' => 148,
                                        'AlternateId' => '1',
                                        'Sequence' => 146,
                                        'OmedaWebformText' => '20 - 49',
                                        'ShortDescription' => '20 - 49',
                                        'DemographicValueType' => 0,
                                    ],
                                2 =>
                                    [
                                        'Description' => '50 - 99',
                                        'Id' => 149,
                                        'AlternateId' => '2',
                                        'Sequence' => 147,
                                        'OmedaWebformText' => '50 - 99',
                                        'ShortDescription' => '50 - 99',
                                        'DemographicValueType' => 0,
                                    ],
                            ],
                        'OmedaWebformText' => 'Total Employees at this Location',
                    ],
                12 =>
                    [
                        'Description' => 'FAB: Type of Company',
                        'DemoLegacyId' => '',
                        'Id' => 15,
                        'DemographicType' => 1,
                        'DemographicValues' =>
                            [
                                0 =>
                                    [
                                        'Description' => 'Business Service',
                                        'Id' => 154,
                                        'AlternateId' => '1',
                                        'Sequence' => 152,
                                        'OmedaWebformText' => 'Business Service',
                                        'ShortDescription' => 'Business Service',
                                        'DemographicValueType' => 0,
                                    ],
                                1 =>
                                    [
                                        'Description' => 'Service Center/Metal Proceessor',
                                        'Id' => 155,
                                        'AlternateId' => '2',
                                        'Sequence' => 153,
                                        'OmedaWebformText' => 'Service Center/Metal Proceessor',
                                        'ShortDescription' => 'Service Center/Metal Proceessor',
                                        'DemographicValueType' => 0,
                                    ],
                                2 =>
                                    [
                                        'Description' => 'Toll Processor',
                                        'Id' => 156,
                                        'AlternateId' => '13',
                                        'Sequence' => 154,
                                        'OmedaWebformText' => 'Toll Processor',
                                        'ShortDescription' => 'Toll Processor',
                                        'DemographicValueType' => 0,
                                    ],
                            ],
                        'OmedaWebformText' => 'Type of Company',
                    ],
                13 =>
                    [
                        'Description' => 'FABTECH: FABTECH Technologies',
                        'DemoLegacyId' => '',
                        'Id' => 16,
                        'DemographicType' => 2,
                        'DemographicValues' =>
                            [
                                0 =>
                                    [
                                        'Description' => 'Brazing & Soldering',
                                        'Id' => 461,
                                        'AlternateId' => '10',
                                        'Sequence' => 459,
                                        'OmedaWebformText' => 'Brazing & Soldering',
                                        'ShortDescription' => 'Brazing & Soldering',
                                        'DemographicValueType' => 0,
                                    ],
                                1 =>
                                    [
                                        'Description' => 'Additive Mfg/3D Printing',
                                        'Id' => 462,
                                        'AlternateId' => '1137',
                                        'Sequence' => 460,
                                        'OmedaWebformText' => 'Additive Mfg/3D Printing',
                                        'ShortDescription' => 'Additive Mfg/3D Printing',
                                        'DemographicValueType' => 0,
                                    ],
                                2 =>
                                    [
                                        'Description' => 'Safety & Environmental',
                                        'Id' => 463,
                                        'AlternateId' => '1186',
                                        'Sequence' => 461,
                                        'OmedaWebformText' => 'Safety & Environmental',
                                        'ShortDescription' => 'Safety & Environmental',
                                        'DemographicValueType' => 0,
                                    ],
                                3 =>
                                    [
                                        'Description' => 'Business Services',
                                        'Id' => 464,
                                        'AlternateId' => '1207',
                                        'Sequence' => 462,
                                        'OmedaWebformText' => 'Business Services',
                                        'ShortDescription' => 'Business Services',
                                        'DemographicValueType' => 0,
                                    ],
                            ],
                        'OmedaWebformText' => 'Fabtech Tech to Evaluate',
                    ],
                14 =>
                    [
                        'Description' => 'FABTECH: Industry',
                        'DemoLegacyId' => '',
                        'Id' => 17,
                        'DemographicType' => 1,
                        'DemographicValues' =>
                            [
                                0 =>
                                    [
                                        'Description' => 'Aluminum',
                                        'Id' => 423,
                                        'AlternateId' => '25',
                                        'Sequence' => 421,
                                        'OmedaWebformText' => 'Aluminum',
                                        'ShortDescription' => 'Aluminum',
                                        'DemographicValueType' => 0,
                                    ],
                                1 =>
                                    [
                                        'Description' => 'Aerospace',
                                        'Id' => 424,
                                        'AlternateId' => '2',
                                        'Sequence' => 422,
                                        'OmedaWebformText' => 'Aerospace',
                                        'ShortDescription' => 'Aerospace',
                                        'DemographicValueType' => 0,
                                    ],
                                2 =>
                                    [
                                        'Description' => 'Agricultural',
                                        'Id' => 425,
                                        'AlternateId' => '1',
                                        'Sequence' => 423,
                                        'OmedaWebformText' => 'Agricultural',
                                        'ShortDescription' => 'Agricultural',
                                        'DemographicValueType' => 0,
                                    ],
                            ],
                        'OmedaWebformText' => 'Fabtech Industry',
                    ],
            ],
            'description' => 'FMA Communications',
            'id' => 12345,
            'products' => [
                0 =>
                    [
                        'alternateId' => '',
                        'description' => 'Web Form Communication',
                        'frequency' => null,
                        'frequencyType' => null,
                        'id' => 2,
                        'productType' => 5,
                    ],
                1 =>
                    [
                        'alternateId' => 'FMA_FAB',
                        'description' => 'The Fabricator',
                        'frequency' => 12,
                        'frequencyType' => 'YR',
                        'id' => 3,
                        'productType' => 1,
                    ],
                2 =>
                    [
                        'alternateId' => 'FMA_CIM',
                        'description' => 'Canadian Metalworking / Canadian Fabricating & Welding',
                        'frequency' => 12,
                        'frequencyType' => 'YR',
                        'id' => 4,
                        'productType' => 1,
                    ],
                5 =>
                    [
                        'alternateId' => '',
                        'description' => 'The Fabricator Newsletter',
                        'frequency' => 1,
                        'frequencyType' => 'MO',
                        'id' => 7,
                        'productType' => 2,
                    ],
                6 =>
                    [
                        'alternateId' => null,
                        'description' => 'FABTECH',
                        'frequency' => null,
                        'frequencyType' => null,
                        'id' => 8,
                        'productType' => 3,
                    ],
            ],
        ];

        return array_merge($sampleReferences, $overrides);
    }
}
