<?php

namespace App;

class Example
{
    public function sum(float $a, float $b):float
    {
        return $a+$b;
    }

    public function div(int $c, int $d)
    {
        return $c/$d;
    }

    public function mult(float $e, float $f)
    {
        return $e*$f;
    }

    public function subt(float $g, float $h)
    {
        return $g-$h;
    }

    public function trans(array)
    {
      array_unshift($mx, null);
    return $mx = call_user_func_array('array_map', $mx);
    }
}