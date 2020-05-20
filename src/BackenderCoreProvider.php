<?php

namespace Backender\Core;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class BackenderCoreProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot(Router $router)
    {
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            \Backender\Core\Commands\BuildJsonFileRoutes::class,
        ]);
    }
}
