<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CombatLog;
use App\Models\Combat;
use App\Service\CombatLogService;

class CombatLogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(CombatLogService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
