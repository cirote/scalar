<?php

namespace Cirote\Scalar;

use App\Types\Type\Density;
use App\Types\Config\Density as ConfigDensity;
use JBZoo\SimpleTypes\Config\Config;
use JBZoo\SimpleTypes\Config\Volume as ConfigVolume;
use JBZoo\SimpleTypes\Type\Volume;
use JBZoo\SimpleTypes\Config\Weight as ConfigWeight;
use JBZoo\SimpleTypes\Type\Weight;
use JBZoo\SimpleTypes\Config\Temp as ConfigTemperature;
use JBZoo\SimpleTypes\Type\Temp as Temperature;

class Scalar
{
    public function __construct()
    {

    }

    public function Density($value)
    {
        Config::registerDefault('density', new ConfigDensity());

        return new Density($value);
    }

    public function Volume($value)
    {
        Config::registerDefault('volume', new ConfigVolume());

        return new Volume($value);
    }

    public function Weight($value)
    {
        Config::registerDefault('weight', new ConfigWeight());

        return new Weight($value);
    }

    public function Temperature($value)
    {
        Config::registerDefault('temp', new ConfigTemperature());

        return new Temperature($value);
    }
}
