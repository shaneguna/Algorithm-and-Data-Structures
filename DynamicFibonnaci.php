<?php

function fib(int $n)
{  
    $fibNodes = [];

    if ($n <= 0) {
        return 0;
    }

    if ($n === 1) {
        return 1;
    }

    if (isset($fibNodes[$n])) {
        return $fibNodes[$n];
    }
     
    $fibNodes[0] = 0;
    $fibNodes[1] = 1;
     
    for ($i = 2; $i <= $n; $i++)
    {
        $fibNodes[$i] = $fibNodes[$i-1] + $fibNodes[$i-2];
    }
     
    return $fibNodes[$n];
}
