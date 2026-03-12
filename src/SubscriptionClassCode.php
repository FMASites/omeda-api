<?php

// https://knowledgebase.omeda.com/omedaclientkb/api-standard-constants-and-codes#APIStandardConstantsandCodes-SubscriptionClassCodes
namespace FMASites\Omeda;

enum SubscriptionClassCode: int
{
    case Active = 1;
    case ActiveNonQualified = 2;
    case QualifiedReserve = 3;
    case SoftControlledKills = 8;
    case ControlledKills = 9;
    case ACSKills = 10;
    case ExpireSuspends = 20;
    case FutureStarts = 21;
    case PostalSuspends = 22;
    case CreditSuspends = 23;
    case RequestedSuspends = 24;
    case KillRefunds = 25;
    case Passalong = 50;
}
