<?php namespace Shamsy;

use App;
use Illuminate\Support\ServiceProvider;

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
