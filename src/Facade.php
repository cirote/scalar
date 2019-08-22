<?php

namespace Cirote\Scalar;

use Illuminate\Support\Facades\Facade as BaseFacade;

class Facade extends BaseFacade
{
    protected static function getFacadeAccessor()
    {
        dd('Hola gg');
        return 'scalar';
    }
}