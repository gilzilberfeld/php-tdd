<?php


namespace App\Logic;


class BetterCalculator
{
    private string $display;
    private $lastArgument;
    private $lastOperation;
    private $newArgument;
    private $shouldReset;

    const ADD = 0;
    const SUB = 1;
    const MUL = 2;
    const DIV = 3;

    const PLUS = 0;

    function __construct()
    {
        $this->newArgument = false;
        $this->shouldReset = false;
    }

    public function press($key)
    {
        if (strcmp($key, "C") == 0)
            $this->display = "";
        else {
            if (strcmp($key, "+") == 0) {
                $this->lastOperation = self::ADD;
                $this->lastArgument = intval($this->display);
                $this->newArgument = TRUE;
            } else {
                if (strcmp($key, "/") == 0) {
                    $this->lastOperation = self::DIV;
                    $this->lastArgument = intval($this->display);
                    $this->newArgument = TRUE;
                } else if (strcmp($key, "=") == 0) {
                    $currentArgument = intval($this->display);
					if ($this->lastOperation == self::PLUS) {
                        $this->display =strval($this->lastArgument + $this->currentArgument);
                    }
					$this->shouldReset = false;
				} else {
                    if ($this->shouldReset == TRUE) {
                        $this->display = "";
                        $this->shouldReset = false;
                    }
                    if ($this->newArgument == TRUE) {
                        $this->display = "";
                        $this->newArgument = false;
                    }
                    $this->display .= $key;
                }
            }
        }
    }

    public function getDisplay(): string
    {
        return $this->display;
    }

}
