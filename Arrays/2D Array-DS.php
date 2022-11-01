<?php
function hourglassSum($arr)
{
    $sum = [];
    for ($i = 1; $i < sizeof($arr) - 1; $i++) {
        for ($j = 1; $j < sizeof($arr[$i]) - 1; $j++) {
            $hourglass = [];
            array_push($hourglass, $arr[$i][$j],  $arr[$i - 1][$j], $arr[$i - 1][$j - 1], $arr[$i - 1][$j + 1],  $arr[$i + 1][$j], $arr[$i + 1][$j - 1], $arr[$i + 1][$j + 1]);
            array_push($sum, array_sum($hourglass));
        }
    }
    return max($sum);
}


$arra = [
    [1, 1, 1, 0, 0, 0],
    [0, 1, 0, 0, 0, 0],
    [1, 1, 1, 0, 0, 0],
    [0, 0, 2, 4, 4, 0],
    [0, 0, 0, 2, 0, 0],
    [0, 0, 1, 2, 4, 0]
];
$arr = [
    [1, 1, 1, 0, 0, 0],
    [0, 1, 0, 0, 0, 0],
    [1, 1, 1, 0, 0, 0],
    [0, 9, 2, -4, -4, 0],
    [0, 0, 0, -2, 0, 0],
    [0, 0, -1, -2, -4, 0],
];
print_r(hourglassSum($arr));
