<?php
namespace Tests\Unit;

use App\Logic\BasicCalculator;
use App\Logic\PowerOperator;
use PHPUnit\Framework\TestCase;

class MockingTests1 extends TestCase
{
    private BasicCalculator $calc;

    protected function setUp(): void
    {
        $this->calc = new BasicCalculator();
    }

    public function test_Crash() {
        $this->markTestSkipped('It really crashes');
        $powerOperator = new PowerOperator();

        $result = $this->calc->addWithPower(4, $powerOperator);
        $this->assertEquals(20, $result, "Out of power");

    }

    public function test_ManualMock() {
        $mockOperator = new MockOperator();

        $result = $this->calc->addWithPower(4, $mockOperator);
        $this->assertEquals(20, $result, "Out of power");

    }

}

