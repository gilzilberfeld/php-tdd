<?php
namespace Tests\Unit;

use App\Logic\BasicCalculator;
use App\Logic\PowerOperator;
use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\TestCase;

class MockingTests3 extends TestCase
{
    private BasicCalculator $calc;

    public function test_Mock(){
        $this->calc = new BasicCalculator();
        $mock = $this->createMock(PowerOperator::class);

        // setup expectations
        $mock->expects($this->once())
                ->method('invoke')
                ->withAnyParameters();

        $this->calc->addWithPower(4, $mock);
    }

    public function test_MockWithArgumentCheck(){
        $this->calc = new BasicCalculator();
        $mock = $this->createMock(PowerOperator::class);

        // setup expectations
        $mock->expects($this->once())
            ->method('invoke')
            ->with(4);

        $this->calc->addWithPower(4, $mock);
    }
}

