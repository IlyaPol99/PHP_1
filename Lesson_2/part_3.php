<?php

do {
    $number = (int)readline("Введите положительное целое число: ");
} while (!$number || $number < 0);

$fingerNumber = "";
switch ($number % 8) {
    case 1:
        $fingerNumber = 1;
        break;
    case 0:
    case 2:
        $fingerNumber = 2;
        break;
    case 3:
    case 7:
        $fingerNumber = 3;
        break;
    case 4:
    case 6:
        $fingerNumber = 4;
        break;
    case 5:
        $fingerNumber = 5;
        break;
    default:
        echo "Что-то пошло не так.";
}

echo "Порядковый номер пальца: $fingerNumber";