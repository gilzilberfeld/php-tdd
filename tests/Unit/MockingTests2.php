<?php
namespace Tests\Unit;

use App\Logic\BasicCalculator;
use App\Logic\PowerOperator;
use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\TestCase;

class MockingTests2 extends TestCase
{
    private BasicCalculator $calc;

    public function test_Stub(){
        $this->calc = new BasicCalculator();
        $stub = $this->createStub(PowerOperator::class);

        $stub->method('invoke')
            ->willReturn(16);

        $result = $this->calc->addWithPower(4, $stub);
        $this->assertEquals(20, $result, "Out of power");
    }
}

