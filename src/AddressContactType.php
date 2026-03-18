<?php

declare(strict_types=1);

// https://knowledgebase.omeda.com/omedaclientkb/api-standard-constants-and-codes#APIStandardConstantsandCodes-AddressContactTypes
namespace FMASites\Omeda;

enum AddressContactType: int {
    case BusinessAddress = 100;
    case HomeAddress = 110;
}
