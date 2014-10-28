<?php

class CalculatorTest extends TestCase {  

    public function test_passing_string_for_x () {
    // Create a new Calculator
      $calculator = new Calculator;
      $calculator->arg1 = 'string';
      
      // The error should be set
      $this->assertTrue(is_numeric($calculator->arg1));
    }
    public function test_passing_string_for_y () {
        // Create a new Calculator
        $calculator = new Calculator;
        $calculator->arg2 = 'string';

        // The error should be set
        $this->assertTrue(is_numeric($calculator->arg2));
    }
    public function test_passing_invalid_operator( ) { 
        // Create a new Calculator
        $calculator = new Calculator;
        $operators = array('+','-','*','/');
        $calculator->operator = '#';

        // The error should be set
        $this->assertTrue(!in_array($calculator->operator, $operators));
    }
    public function test_passing_null_x () { 
        // Create a new Calculator
        $calculator = new Calculator;
        $calculator->arg1 = '';

        // The error should be set
        $this->assertTrue(is_null($calculator->arg1));
    }
    public function test_passing_null_operator () { 
        // Create a new Calculator
        $calculator = new Calculator;
        $calculator->operator = '';

        // The error should be set
        $this->assertTrue(is_null($calculator->operator));
    }
    public function test_passing_null_y () {
        // Create a new Calculator
        $calculator = new Calculator;
        $calculator->arg2 = '';

        // The error should be set
        $this->assertTrue(is_null($calculator->arg2));
    }
}