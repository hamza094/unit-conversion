<?php

namespace Hamza094\UnitConversions;

class Temperature
{
    private float $celcius;

    public static function fromCelsius(float $celcius):self
    {
        return new static($celcius);
    }

    public function __construct(float $celcius)
    {
        $this->celcius = $celcius;
    }

    public function toFahrenheit():float
    {
        return ($this->celcius * 1.8000) + 32;
    }
}
