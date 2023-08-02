<?php

namespace FaisalBudiono\JWTMinimalist\Providers;

use FaisalBudiono\JWTMinimalist\Commands\KeyGenerator\GenerateRSAKeyCommand;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateRSAKeyCommand::class,
            ]);
        }
    }
}
