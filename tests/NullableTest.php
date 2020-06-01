<?php

namespace Nullable;

use Tests\TestCase;

class NullableTest extends TestCase
{
    /**
     * @test
     */
    public function checkNullableIsTrue()
    {
        $result = Nullable::all();
        $this->assertEquals($result, 'NULL');
    }
}
