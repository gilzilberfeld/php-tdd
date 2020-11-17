<?php

namespace Tests\Unit;

use App\Models\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTests extends TestCase
{
    public function test_CalculatorAdd()
    {
        // Arrange
        $calc = new calculator();

        // Act
        $result = $calc->calculate(1,2,'+');

        // Assert
        $this->assertEquals(3, $result, "if this fails, you should consider painting");
    }
}
