<?php

namespace Tests\Unit;

use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response=$this->get('/home');
        $response->assertOk();
    }
}
