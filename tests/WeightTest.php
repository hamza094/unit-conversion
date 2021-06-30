<?php

namespace Hamza094\UnitConversions\Tests;

namespace Hamza094\UnitConversions;

use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_into_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();
        $this->assertEquals(220.46, $lbs);
    }
}
