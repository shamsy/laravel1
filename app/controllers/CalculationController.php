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

    public function interests()
    {
        $price = Input::get('price');
        return $this->calculator->interest($price, 10);
    }
}
