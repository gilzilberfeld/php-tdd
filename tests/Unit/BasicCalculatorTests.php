<?php

namespace Tests\Unit;

use App\Logic\BasicCalculator;
use PHPUnit\Framework\TestCase;

class BasicCalculatorTests extends TestCase
{
    public function test_Add()
    {
        // Arrange
        $calc = new BasicCalculator();

        // Act
        $result = $calc->calculate(1,2,'+');

        // Assert
        $this->assertEquals(3, $result, "If this fails, you should consider art");
    }



}
