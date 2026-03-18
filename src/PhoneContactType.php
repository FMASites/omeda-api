<?php

declare(strict_types=1);

// https://knowledgebase.omeda.com/omedaclientkb/api-standard-constants-and-codes#APIStandardConstantsandCodes-PhoneContactTypes
//
// Circ requested "Work" "Home" and "Mobile" to appear as the phone types. The original Omeda values are commented.
namespace FMASites\Omeda;

enum PhoneContactType: int
{
    case Work = 200; //BusinessPhone
    case Home = 210; //HomePhone
    case Mobile = 230; //MobilePhone
    case Fax = 240;
    case ForeignPhone = 250;
    case ForeignFax = 260;
    case Pager = 270;
}
