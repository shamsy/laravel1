<?php namespace Shamsy;

use Shamsy\Contracts\CalculatorInterface;

/*
 * Calulator Class
 * Created for tests
 *
 */

class Calculator implements CalculatorInterface
{
  public function test() {
      echo 'this is a test!';
  }

  public function interest($price, $percentage)
  {
    return $price + ($price * $percentage) / 100;
  }
}

