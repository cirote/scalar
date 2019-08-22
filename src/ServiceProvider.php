<?php

namespace Cirote\Scalar;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->app->bind(Scalar::class, function ($app) {
            return new Scalar();
        });

        $this->app->alias(Scalar::class, 'JeJe');
    }

    public function boot()
    {

    }
}