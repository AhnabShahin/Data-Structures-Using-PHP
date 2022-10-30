<?php
// https://www.hackerrank.com/challenges/sparse-arrays/problem

function matchingStrings($stringList, $queries)
{
    $result = [];
    foreach ($queries as $query_item) {
        $count = 0;
        foreach ($stringList as $string_item) {
            $query_item === $string_item && $count++;
        }
        array_push($result, $count);
        $count = 0;
    }
    return $result;
}
$stringList = [
    'aba',
    'baba',
    'aba',
    'xzxb'
];
$queries = [
    'aba',
    'xzxb',
    'ab'
];
$res = matchingStrings($stringList, $queries);
