<?php

namespace Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        // arrange
        $target = new Calculator();
        $expected = 6;
        // act
        $actual = $target->addition(2, 4);
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testSubtraction()
    {
        // arrange
        $target = new Calculator();
        $expected = 6;
        // act
        $actual = $target->subtraction(8, 2);
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testMultiplication()
    {
        // arrange
        $target = new Calculator();
        $expected = 6;
        // act
        $actual = $target->multiplication(3, 2);
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testDivision()
    {
        // arrange
        $target = new Calculator();
        $expected = 6;
        // act
        $actual = $target->division(18, 3);
        // assert
        $this->assertEquals($expected, $actual);
    }
}