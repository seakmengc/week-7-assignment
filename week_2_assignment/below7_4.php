<?php

$arr = [1, 2, 3, 4, 5];

$filter_even = true;

$filtered_arr = array_filter($arr, function ($val) use ($filter_even) {
    return $val % 2 - $filter_even;
});

print_r($filtered_arr);

