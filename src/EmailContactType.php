<?php

// https://knowledgebase.omeda.com/omedaclientkb/api-standard-constants-and-codes#APIStandardConstantsandCodes-EmailContactTypes
namespace FMASites\Omeda;

enum EmailContactType: int {
    // Business
    case Primary = 300;
    // Home
    case Secondary = 310;
}
