<?php

namespace MadWeb\Robots;

use Illuminate\Support\ServiceProvider;

class RobotsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('robots', function () {
            return new Robots;
        });
    }
}
