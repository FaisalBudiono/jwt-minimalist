<?php

namespace FaisalBudiono\JWTMinimalist\ServiceProviders;

use FaisalBudiono\JWTMinimalist\Commands\KeyGenerator\GenerateRSAKeyCommand;
use Illuminate\Support\ServiceProvider;

class JWTMinimalistServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->commands([
            GenerateRSAKeyCommand::class,
        ]);
    }
}
