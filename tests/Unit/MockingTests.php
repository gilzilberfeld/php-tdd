<?php
namespace Tests\Unit;

use App\Logic\BasicCalculator;
use App\Logic\PowerOperator;
use PHPUnit\Framework\TestCase;

class MockingTests extends TestCase
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

    public function test_Stub(){
        $stub = $this->createStub(PowerOperator::class);

        // Configure the stub.
        $stub->method('isReady')
            ->willReturn(TRUE);

        $stub->method('invoke')
            ->willReturn(16);

        $result = $this->calc->addWithPower(4, $stub);
        $this->assertEquals(20, $result, "Out of power");


    }

    public function test_Mock(){
        $mock = $this->createMock(PowerOperator::class);

        // Configure the mock.
        $mock->method('isReady')
            ->willReturn(FALSE);

        // setup expectations
        $mock->expects($this->never())
                ->method('invoke')
                ->with($this->any());

        $result = $this->calc->addWithPower(4, $mock);

    }
}

