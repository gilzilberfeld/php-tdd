<?php

namespace Tests\Unit;

class MockOperator extends \App\Logic\PowerOperator
{
    function isReady()
    {
        return TRUE;
    }

    function invoke($p)
    {
        return 16;
    }
}
