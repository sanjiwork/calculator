<?php

namespace App;


class Calculator
{
    public function addition(int $x, int $y)
    {
        return $x + $y;
    }

    public function subtraction(int $x, int $y)
    {
        return $x - $y;
    }

    public function multiplication(int $x, int $y)
    {
        return $x * $y;
    }

    public function division(int $x, int $y)
    {
        return $x / $y;
    }
}