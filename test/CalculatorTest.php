<?php

use PHPUnit\Framework\TestCase;
require_once './src/Calculator.php';

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd()
    {
        $this->assertEquals(5, $this->calculator->add(5));
        $this->assertEquals(15, $this->calculator->add(10));
    }

    public function testSubtract()
    {
        $this->assertEquals(-5, $this->calculator->subtract(5));
        $this->assertEquals(-15, $this->calculator->subtract(10));
    }

    public function testMultiply()
    {
        $this->calculator->add(1);  // Set initial value
        $this->assertEquals(5, $this->calculator->multiply(5));
    }

    public function testDivide()
    {
        $this->calculator->add(10);
        $this->assertEquals(5, $this->calculator->divide(2));

        $this->expectException(\InvalidArgumentException::class);
        $this->calculator->divide(0);
    }
}