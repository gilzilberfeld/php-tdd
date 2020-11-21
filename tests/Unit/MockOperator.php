<?php

namespace Tests\Unit;

class MockOperator extends \App\Logic\PowerOperator
{
     function invoke($p)
    {
        return 16;
    }
}
