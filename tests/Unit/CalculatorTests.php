<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CalculatorTests extends TestCase
{
    public function test_CalculatorAdd()
    {

        $calc = new calculator();
        $result = $calc->getresult(1,2,'+');

        $this->assertEquals(3, $result, "if this fails, you should consider painting");
    }
}
