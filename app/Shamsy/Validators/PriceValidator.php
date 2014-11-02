<?php namespace Shamsy\Validators;

use Shamsy\Exceptions\InvalidPriceException;
use Illuminate\Validation\Factory as ValidationFactory;

class PriceValidator implements Contracts\PriceValidatorInterface {

    protected $validator;

    protected $rules = [
        'price' => 'numeric'
    ];

    public function __construct(ValidationFactory $validator)
    {
        $this->validator = $validator;
    }

    public function validate($data)
    {
        $validation = $this->validator->make($data, $this->rules);

        if ($validation->passes()) return true;

        throw new InvalidPriceException;
    }
}
