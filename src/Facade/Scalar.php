<?php

namespace Cirote\Scalar\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed Density(string $value)
 * @method static mixed Temperature(string $value)
 * @method static mixed Volume(string $value)
 * @method static mixed Weight(string $value)
 *
 */
class Scalar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'scalar';
    }
}