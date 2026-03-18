<?php

declare(strict_types=1);

namespace FMASites\Omeda;

use Illuminate\Support\ServiceProvider;

class OmedaServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/omeda.php', 'omeda');
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/omeda.php' => config_path('omeda.php'),
        ], 'config');
    }
}
