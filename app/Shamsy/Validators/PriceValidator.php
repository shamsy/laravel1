<?php namespace Shamsy\Validators;

use Shamsy\Exceptions\InvalidPriceException;

class PriceValidator extends Validator implements Contracts\PriceValidatorInterface {

    protected $rules = [
        'price' => 'numeric'
    ];

    public function validate($data)
    {
        $validation = $this->validation($data);

        if ($validation->passes()) return true;

        throw new InvalidPriceException($validation->messages()->all());
    }
}
