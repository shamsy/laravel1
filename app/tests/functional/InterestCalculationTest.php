<?php

class InterestCalculationTest extends TestCase {

    public function test_interest_calculation_reachability()
    {
        $this->call('GET', '/calculate/interests');
        $this->assertResponseOk();
    }

    public function test_calculating_interest()
    {
        $response = $this->call('GET', 'calculate/interests', ['price' => 20.99]);
        $this->assertEquals(23.089, $response->original);
        $this->assertInternalType('float', $response->original);
    }
}
