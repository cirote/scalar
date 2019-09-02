<?php

namespace Cirote\Scalar\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed Density()
 *
 * @see \Illuminate\Cache\CacheManager
 * @see \Illuminate\Cache\Repository
 */
class Scalar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'scalar';
    }
}