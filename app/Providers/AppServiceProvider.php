<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive( 'website_link', function () {
            $app_url = url( config( 'app.url' ) );
            return "<a target='_blank' href='$app_url'>$app_url</a>";
        } );

        // Force HTTPS in non-local environments
        if ( config( 'app.env' ) !== 'local' ) {
            \URL::forceScheme( 'https' );
        }
    }
}
