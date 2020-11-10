<?php

namespace Modules\Vimeo;

use Modules\Vimeo\Models\Video;
use Illuminate\Support\ServiceProvider;

class VimeoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //include migration files to automigrate
        $this->loadMigrationsFrom(__DIR__ . '/migrations');

        //include config file
        $this->mergeConfigFrom(__DIR__ . '/config.php', 'vimeo');

        $this->app->bind('vimeo', function () {
            return new Video();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
