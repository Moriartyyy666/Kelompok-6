<?php

class Calculator
{
    private $result;

    public function __construct()
    {
        $this->result = 0;
    }

    public function add($value)
    {
        $this->result += $value;
        return $this->result;
    }

    public function subtract($value)
    {
        $this->result -= $value;
        return $this->result;
    }

    public function multiply($value)
    {
        $this->result *= $value;
        return $this->result;
    }

    public function divide($value)
    {
        if ($value == 0) {
            throw new \InvalidArgumentException("Cannot divide by zero");
        }
        $this->result /= $value;
        return $this->result;
    }
}