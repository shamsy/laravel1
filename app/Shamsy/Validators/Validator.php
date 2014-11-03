<?php namespace Shamsy\Validators;

use Illuminate\Validation\Factory as ValidationFactory;

abstract class Validator {

    /**
     * @var \Illuminate\Validation\Factory
     */
    protected $validator;

    /**
     * The set of rules for this validator.
     *
     * @var array
     */
    protected $rules = [];

    public function __construct(ValidationFactory $validator)
    {
        $this->validator = $validator;
    }

    abstract public function validate($data);

    public function validation($data)
    {
        return $this->validator->make($data, $this->rules);
    }
}
