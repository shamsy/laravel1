<?php

use Shamsy\Contracts\CalculatorInterface;

class CalculationController extends Controller
{
    public function __construct(CalculatorInterface $calculator)
    {
       $this->calculator = $calculator;
    }
    
    public function calculate()
    {
        $this->calculator->test();
    }
}
