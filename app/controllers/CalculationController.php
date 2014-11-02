<?php

use Shamsy\Contracts\CalculatorInterface;
use Shamsy\Validators\Contracts\PriceValidatorInterface;

class CalculationController extends Controller
{
    /**
     * @var Shamsy\Contracts\CalculatorInterface
     */
    protected $calculator;

    /**
     * @var Shamsy\Contracts\CalculatorInterface
     */
    protected $validator;

    public function __construct(CalculatorInterface $calculator, PriceValidatorInterface $validator)
    {
       $this->calculator = $calculator;
       $this->validator  = $validator;
    }

    /**
     * Perform some calculation
     * @return void
     */
    public function calculate()
    {
        $this->calculator->test();
    }

    /**
     * Calculate interests based on a given price.
     * @return float|int
     *
     * @throws Shamsy\Exceptions\InvalidPriceException If the price is not a numeric value>
     */
    public function interests()
    {
        $this->validator->validate(Input::all());

        $price = Input::get('price');
        return $this->calculator->interest($price, 10);
    }
}
