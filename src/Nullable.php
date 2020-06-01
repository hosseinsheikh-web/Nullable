<?php

namespace HosseinSheikh\Nullable;

class Nullable
{
    public function __call($method, $args)
    {
        return new static();
    }

    public static function __callStatic($method, $args)
    {
        return new static();
    }

    public function __get($proerty)
    {
        return 'NULL';
    }

    public function __toString()
    {
        return 'NULL';
    }

}
