<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CombatLog;
use App\Models\Combat;

class CombatLogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(CombatLog::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
