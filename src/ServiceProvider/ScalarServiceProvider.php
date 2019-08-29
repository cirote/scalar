<?php

namespace Cirote\Scalar\ServiceProvider;

use Cirote\Scalar\Scalar;
use Illuminate\Support\ServiceProvider;

class ScalarServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('scalar', function ($app) {
            return new Scalar();
        });
    }

    public function boot()
    {

    }
}