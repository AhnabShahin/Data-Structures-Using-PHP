<?php
function rotateLeft($d, $arr)
{
    for ($i = 1; $i <= $d; $i++) {
        array_push($arr, array_shift($arr));
    }
    return $arr;
}
$arr = [1, 2, 3, 4, 5];
$d = 4;

print_r(rotateLeft($d, $arr));
