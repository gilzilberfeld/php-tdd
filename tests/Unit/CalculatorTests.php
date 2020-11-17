<?php

namespace Tests\Unit;

use App\Logic\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTests extends TestCase
{
    public function test_Add()
    {
        // Arrange
        $calc = new calculator();

        // Act
        $result = $calc->calculate(1,2,'+');

        // Assert
        $this->assertEquals(3, $result, "If this fails, you should consider art");
    }
}
