<?php

namespace HosseinSheikh\Test;


class NullableTest extends Orchestra\Testbench\TestCase
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
