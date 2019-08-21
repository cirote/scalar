<?php

namespace Cirote\Scalar;

use Illuminate\Support\Facades\Facade;

/** @see \Spatie\BladeX\BladeX */
class Scalar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'scalar';
    }
}