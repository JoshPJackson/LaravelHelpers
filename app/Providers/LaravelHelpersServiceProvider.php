<?php

namespace App\Providers;

use App\Console\Commands\ClearFull;
use App\Console\Commands\ClearLogs;
use App\Console\Commands\DBFreshSeed;
use Illuminate\Support\ServiceProvider;

class LaravelHelpersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ClearFull::class,
                DBFreshSeed::class,
                ClearLogs::class
            ]);
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
