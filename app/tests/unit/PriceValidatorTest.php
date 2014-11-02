<?php

class PriceValidatorTest extends TestCase {

    public function setUp()
    {
        parent::setUp();

        $this->validator = App::make('Shamsy\Validators\Contracts\PriceValidatorInterface');
    }

    public function test_binding()
    {
        $this->assertInstanceOf('Shamsy\Validators\PriceValidator', $this->validator);
    }

    public function test_passes_validation()
    {
        $this->assertTrue($this->validator->validate(['price' => 123]));
        $this->assertTrue($this->validator->validate(['price' => 12.34]));
    }

    /**
     * @expectedException Shamsy\Exceptions\InvalidPriceException
     */
    public function test_fails_validation_with_non_numeric_price()
    {
        $this->validator->validate(['price' => 'notnumeric']);
    }
}
