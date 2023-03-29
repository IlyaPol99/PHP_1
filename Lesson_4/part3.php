<?php

function getWord(array $box, string $searchWord): bool {
    foreach($box as $value) {
        if (is_array($value)) {
            $result = getWord($value, $searchWord);
            if ($result != null) {
                return $result;
            }
        } elseif ($value === $searchWord) {
            return true;
        }
    }
    return false;
}

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

while (!$searchWord = readline("Введите название предмета, который нужно найти: ")) {
    print_r("Вы ничего не ввели. Попробуйте ещё раз." . PHP_EOL);
}
$res = getWord($box, $searchWord);
print_r($res ? "Предмет \"$searchWord\" найден." : "Предмет \"$searchWord\" не найден.");
