<?php

class CalculatorController extends Controller
{
    /*
     * Calculate the result of the requested operation
     */
    public function calculate()
    {
        $calculator = new Calculator();
        
        if ($this->isPostRequest()) {
            $validator = $this->getArgumentsValidator();

            if ($validator->passes()) {

                $result = $calculator->calculate(Input::get("arg1"), Input::get("operator"), Input::get("arg2"));

                return Redirect::route("calculator/calculate")
                ->withInput()
                ->with("result", $result); 
                
            } else {   
                return Redirect::route("calculator/calculate")
                ->withInput()
                ->withErrors($validator);
            }  
        }
        
        return View::make("calculator/calculate");
    }
    
    /*
     * Validation of input
     */
    protected function getArgumentsValidator()
    {
      return Validator::make(Input::all(), [
        "arg1" => "required|numeric",
        "operator" => "required|size:1",
        "arg2" => "required|numeric"
      ]);
    }
    
    /*
     * Check if form Posted
     */
    protected function isPostRequest()
    {
      return Input::server("REQUEST_METHOD") == "POST";
    }
}

