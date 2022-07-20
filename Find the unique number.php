<?php
//There is an array with some numbers. All numbers are equal except for one. Try to find it!
//
//findUniq([ 1, 1, 1, 2, 1, 1 ]) === 2
//findUniq([ 0, 0, 0.55, 0, 0 ]) === 0.55
//It’s guaranteed that array contains at least 3 numbers.
//
//The tests contain some very huge arrays, so think about performance.

function find_uniq($a)
{
    sort($a);

    if ($a[0] !== $a[1]) {
        $x = $a[array_key_first($a)];
    } else {
        $x = $a[array_key_last($a)];
    }

    return $x;
}

print_r(find_uniq([5, 0, 0, 0, 0, 0, 0, 0, 0]));