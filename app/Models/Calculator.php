<?php
namespace App\Models;

class Calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
                return $this->a + $this->b;
                break;

            case '-':
                return $this->a - $this->b;
                break;

            case '*':
                return $this->a * $this->b;
                break;

            case '/':
                return $this->a / $this->b;
                break;

            default:
                return "Sorry No command found";
        }
    }
    function calculate($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}


