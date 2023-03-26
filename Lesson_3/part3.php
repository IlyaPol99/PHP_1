<?php

$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Петин Александр' => 2,
        'Петров Михаил' => 4,
        'Васина Елена' => 3,
        'Афанасьев Николай' => 2
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Коношёнок Сергей' => 2,
        'Колбасов Пётр' => 5,
        'Старостина Мария' => 5,
        'Гречко Алексей' => 5,
        'Корочка Марина' => 2
    ]
];
$meanMarkMax = 0;
$badMarkList = [];
$bestGroup = "";

foreach ($students as $key => $value) {
    $markFirstGroup = array_values($value);
    $meanMark = round(array_sum($markFirstGroup) / count($markFirstGroup),1);
    print_r("Арифметическое среднее по всем оценкам в группе \"{$key}\": {$meanMark}." . PHP_EOL);

    // лучшая группа
    if ($meanMark > $meanMarkMax) {
        $meanMarkMax = $meanMark;
        $bestGroup = $key;
    }

    // список на отчисление
    foreach ($value as $k =>$v) {
        if ($v == 2) {
            $badMarkList[$key][] = $k;
        }
    }
}
print_r("\"{$bestGroup}\" - группа с самым большим значением успеваемости." . PHP_EOL);

if (count($badMarkList) > 0) {
    print_r("\tСписок на отчисление" . PHP_EOL);
    foreach ($badMarkList as $key => $value) {
        print_r("Группа \"{$key}\":" . PHP_EOL);
        foreach ($value as $row) {
            print_r("- $row" . PHP_EOL);
        }
    }
    print_r(PHP_EOL);
    print_r($badMarkList);
}
