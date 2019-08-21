<?php

namespace Scalar;

use Illuminate\Support\Facades\Facade;

class Scalar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'scalar';
    }
}