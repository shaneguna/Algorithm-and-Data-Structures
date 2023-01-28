<?php


/*
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function lonelyinteger($a)
{
    // Write your code here
    if (count($a) === 1) {
        return $a[0];
    }

    $single = [];
    $double = [];

    foreach ($a as $i) {

        if (in_array($i, $single)) {
            unset($single[$i]);
            $double[$i] = $i;

            continue;
        }

        $single[$i] = $i;
    }

    return key($single);
}
