<?php

namespace Shamsy;

use Illuminate\Support\ServiceProvider;
use App;

class ShamsyServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //App::bind('Shamsy\Contracts\CalculatorInterface', 'Shamsy\Calculator');
        
        App::bind('Shamsy\Contracts\CalculatorInterface', function()
        {
           return new Calculator;
        });
    }
}