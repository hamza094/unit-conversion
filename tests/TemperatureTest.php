<?php

namespace Hamza094\UnitConversions\Tests;

namespace Hamza094\UnitConversions;

use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_into_fahrenheit()
    {
        $fahrenheit = Temperature::fromCelsius(100)->toFahrenheit();
        $this->assertEquals(212, $fahrenheit);
    }
}
