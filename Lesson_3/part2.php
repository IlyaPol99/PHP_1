<?php

while (!$name = readline("Введите имя именинника: ")) {
    echo "Вы не ввели имя или ввели неправильно.";
}
$epithet = ['невероятного', 'бесконечного', 'космического'];
$wish = ['счастья', 'здоровья', 'терпения'];

$epithetRand = array_rand($epithet, count($epithet) - 1);
$epithetFirstPart = [];
$epithetLastPart = "";
foreach ($epithet as $key => $value) {
    if (in_array($key, $epithetRand)) {
        $epithetFirstPart[] = $value;
    } else {
        $epithetLastPart = $value;
    }
}

$wishRand = array_rand($wish, count($wish) - 1);
$wishFirstPart = [];
$wishLastPart = "";
foreach ($wish as $key => $value) {
    if (in_array($key, $wishRand)) {
        $wishFirstPart[] = $value;
    } else {
        $wishLastPart = $value;
    }
}

$resultFirstPart = [];
for ($i = 0; $i < count($wishFirstPart); $i++) {
    $resultFirstPart[] = sprintf("%s %s",$epithetFirstPart[$i], $wishFirstPart[$i]);
}
$resultLastPart = sprintf("%s %s",$epithetLastPart, $wishLastPart);

print_r("Дорогой {$name}, от всего сердца поздравляю тебя с днем рождения!
Желаю " . implode(', ', $resultFirstPart) . " и " . $resultLastPart . "!");