<?php
namespace App\Logic;

class BasicCalculator
{
    var $param1;
    var $param2;

    function calculate($param1, $param2, $op)
    {
        $this->param1 = $param1;
        $this->param2 = $param2;
        return $this->doCalculation($op);
    }

    function doCalculation($operator)
    {
        switch($operator)
        {
            case '+':
                return $this->param1 + $this->param2;
                break;

            case '-':
                return $this->param1 - $this->param2;
                break;

            case '*':
                return $this->param1 * $this->param2;
                break;

            case '/':
                return $this->param1 / $this->param2;
                break;

            case 'f':
                return $this->factorial($this->param1);
            default:
                return "Sorry No command found";
        }
    }

    function factorial($n)
    {
        return $n <= 1 ? 1 : $n * $this->factorial($n - 1);
    }

    function addWithPower($param1, $powerOperator){
        $this->param1 = $param1;
        if ($powerOperator->isReady() == TRUE) {
            $this->param2 = $powerOperator->invoke($param1);
        }
        return $this->doCalculation( '+');
    }

}


