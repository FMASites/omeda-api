<?php

namespace FMASites\Omeda\Tests\OmedaApi;

/***
 * Stable versions (mocks) of what the Omeda service will return to us. These are JSON strings of sample objects
 * provided by official Omeda documentation.
 */
class OmedaResponse
{
    //https://knowledgebase.omeda.com/omedaclientkb/brand-comprehensive-lookup-service#BrandComprehensiveLookupService-Success
    static string $brandComprehensiveLookup = '{"SubmissionId":"C95AE90C-BEC6-41F2-91E2-2BA9168D1D1F","Id":3000,"Description":"AppDev Today","BrandAbbrev":"APPDEV","CustomerCount":4,"Demographics":[{"Id":1,"DemographicType":1,"Description":"Job Title","AuditedProducts":[101,102,103],"DemographicValues":[{"Id":1,"Description":"Owner, President, CEO","ShortDescription":"Owner","AlternateId":"02"},{"Id":2,"Description":"CIO, CFO, CXO","ShortDescription":"CIO, CFO, CXO","AlternateId":"04"},{"Id":3,"Description":"Vice President","ShortDescription":"VPs","AlternateId":"05"},{"Id":4,"Description":"Management","ShortDescription":"Management","AlternateId":"09"}]},{"Id":2,"DemographicType":2,"Description":"Technology","DemographicValues":[{"Id":11,"Description":"Java","ShortDescription":"Java","AlternateId":"23"},{"Id":12,"Description":"C#","ShortDescription":"C#","AlternateId":"34"},{"Id":13,"Description":"C, C++","ShortDescription":"C, C++","AlternateId":"35"}]}],"Products":[{"Id":1,"Description":"AppDev Today Web Access","ProductType":3,"MarketingClasses":[{"StatusCode":0,"ShortDescription":"Need More Info","ClassId":"2","Description":"Need More Information","Id":24},{"StatusCode":1,"ShortDescription":"Frmwk","ClassId":"3","Description":"Framework","Id":22}],"Issues":[{"Id":478437,"Description":"March 2012 Issue","IssueDate":"2012-05-01","AlternateId":"201205","StatusCode":30},{"Id":478438,"Description":"April 2012 Issue","IssueDate":"2012-04-01","AlternateId":"201205","StatusCode":30}]},{"Id":2,"Description":"AppDev Today Magazine","ProductType":1}],"ContactTypes":[{"Id":100,"Description":"Business Address"},{"Id":200,"Description":"Business Phone"},{"Id":300,"Description":"Primary Email"},{"Id":310,"Description":"Secondary Email"}],"DeploymentTypes":[{"Id":2344,"Description":"Framework Building","AlternateId":"Frmwk Bldg","StatusCode":1}]}';
}
