<?php

$getEvenness = function(int $number) {
    return ($number & 1) ? 'нечётное' : 'чётное';
};

$arrayNum = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$res = array_map($getEvenness, $arrayNum);

print_r($res);