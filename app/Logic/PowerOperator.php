<?php


namespace App\Logic;


class PowerOperator
{
    function isReady() {
        return FALSE;
    }

    function invoke($p) {
        throw new Exception("I'll be done in a minute!");
    }
}
