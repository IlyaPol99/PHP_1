<?php

$totalTime = 0;
$listTask = "";
$name = readline("Как вас зовут? ");
while (!$taskCount = readline("Сколько дел вы запланировали на сегодня? ")) {
    echo "Введите количество дел отличное от нуля.";
};

for ($i = 1; $i <= $taskCount; $i++) {
    $task = "task$i";
    $time = "time$i";
    $$task = readline("Какая задача №$i стоит перед вами сегодня? ");
    $$time = readline("Сколько примерно времени эта задача займет? ");
    $totalTime += $$time;
    $listTask .= "- {$$task} ({$$time}ч)\n";
}

echo "$name, сегодня у вас запланировано $taskCount приоритетных задачи на день:
{$listTask}Примерное время выполнения плана = {$totalTime}ч";