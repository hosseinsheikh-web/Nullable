<?php

namespace HosseinSheikh\Test;


use HosseinSheikh\Nullable\Nullable;
use Orchestra\Testbench\TestCase;

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
