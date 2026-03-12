<?php

namespace FMASites\Omeda\Tests\OmedaApi;

use FMASites\Omeda\OmedaServiceProvider;
use Orchestra\Testbench\TestCase;

class class_OmedaApi extends TestCase
{
    protected string $testBaseApiUrl = 'https://api.example.com/bogus';
    protected string $testOmedaAppId = 'omedaAppId123';

    protected function getPackageProviders($app): array
    {
        return [OmedaServiceProvider::class];
    }

    protected function defineEnvironment($app): void
    {
        $app['config']->set('omeda.appId', $this->testOmedaAppId);
        $app['config']->set('omeda.baseApiUrl', 'https://example.test/omeda/brand/');
        $app['config']->set('omeda.brand', 'fma-test');
        $app['config']->set('omeda.inputId', 'testInputId');
    }
}
