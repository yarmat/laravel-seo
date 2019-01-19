<?php

namespace Yarmat\Seo;

use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/seo.php' => config_path('seo.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../database/migrations/create_seos_table.php' => $this->getMigrationFileName(),
        ], 'migrations');
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

    private function getMigrationFileName()
    {
        $timestamp = date('Y_m_d_His');
        return database_path('migrations/' . $timestamp . '_' . 'create_seos_table.php');
    }
}
