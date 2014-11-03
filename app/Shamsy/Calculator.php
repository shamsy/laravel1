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

  public function add($arg1, $arg2)
  {
    return $this->calculate($arg1, '+', $arg2);
  }

  public function calculate($arg1, $operator, $arg2)
  {
    $arg1 = floatval($arg1);
    $arg2 = floatval($arg2);

    switch($operator)
    {
        case '+':
            $result = $arg1 + $arg2;
        break;

        case '*':
            $result = $arg1 * $arg2;
        break;

        default:
            throw new InvalidOperatorException($operator);
            break;
    }

    return $result;
  }
}

