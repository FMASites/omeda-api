<?php

// https://knowledgebase.omeda.com/omedaclientkb/api-standard-constants-and-codes#APIStandardConstantsandCodes-ProductData
namespace FMASites\Omeda;

enum ProductType: int {
    case Magazine = 1;
    case Newsletter = 2;
    case Event = 3;
    case Catalog = 4;
    case EmailDeployment = 5;
    case AssociationMembership = 6;
    case Website = 7;
    case Newsstand = 8;
    case Accounting = 9;
    case Sales = 10;
}
