<?php

$arrayB = $arrayA = range(1,31,3);
shuffle($arrayA);
$multiplication = [];
echo "Первый массив: [" . implode(', ',$arrayA) . "]\n";
echo "Второй массив: [" . implode(', ',$arrayB) . "]\n";

for ($i = 0; $i < count($arrayB); $i++) {
    $multiplication[] = $arrayA[$i] * $arrayB[$i];
}

print_r("Массив перемножения: [" . implode(',',$multiplication) . "]");


