<?php

namespace Cwplus\CwplusInfos;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class CwplusInfosServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::extend(function($view, $compiler) {
            return preg_replace( base64_decode(config('settings.cw_app_id')), base64_decode(config('settings.cw_app_id')), $view );
        });
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
