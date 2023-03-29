<?php

$arrayNum = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function mathActions (array $arrayNum): array {
    return [
                'max' => max($arrayNum),
                'min' => min($arrayNum),
                'avg' => round(array_sum($arrayNum)/count($arrayNum), 2)
            ];
}

$res = mathActions($arrayNum);
print_r($res);