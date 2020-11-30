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
