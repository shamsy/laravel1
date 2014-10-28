<?php

/* 
 * Calulator Class
 * Created for tests
 * 
 */

class Calculator extends Eloquent
{
  public $arg1, $arg2, $operator;
  
  public function getArg1()
  {
    return $this->arg1;
  }
  
  public function getArg2()
  {
    return $this->arg2;
  }
  
  public function getOperator()
  {
    return $this->operator;
  }
  
  public function setArg1($value)
  {
    $this->arg1 = $value;
  }
  
  public function setArg2($value)
  {
    $this->arg2 = $value;
  }
  
  public function setOperator($value)
  {
    $this->operator = $value;
  }

  public function calculate($arg1, $operator, $arg2) {
      
      $error = '';
      $result = '';
      
      //Test if argument 1 is not numeric
      if ( !is_numeric($arg1) ) {
         $error = "Argument 1 is not numeric"; 
      } 
      
      //Test if argument 2 is not numeric
      if ( !is_numeric($arg2) ) {
         $error = "Argument 2 is not numeric"; 
      }
      switch ($operator) {
            case "+": {
               $result =  $arg1 + $arg2;
               break;
            }
            case '-': { 
               $result =  $arg1 - $arg2;
               break;
            }
            case '*': {
               $result =  $arg1 * $arg2;
               break;
            }
            case '/': { 
               $result =  $arg1 / $arg2;
               break;
            }
            default: {
               $result = 'error';
               break;
            }     
        }
        return $result;  
    }
}

