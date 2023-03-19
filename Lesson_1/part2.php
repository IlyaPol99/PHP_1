<?php
$i = 0;
$totalTime = 0;
$name = readline("Как вас зовут? ");

$i++;
$task = "task$i";
$time = "time$i";
$$task = readline("Какая задача стоит перед вами сегодня? ");
$$time = readline("Сколько примерно времени эта задача займет? ");
$totalTime += $$time;

$i++;
$task = "task$i";
$time = "time$i";
$$task = readline("Какая задача стоит перед вами сегодня? ");
$$time = readline("Сколько примерно времени эта задача займет? ");
$totalTime += $$time;

$i++;
$task = "task$i";
$time = "time$i";
$$task = readline("Какая задача стоит перед вами сегодня? ");
$$time = readline("Сколько примерно времени эта задача займет? ");
$totalTime += $$time;

echo "$name, сегодня у вас запланировано $i приоритетных задачи на день:
- $task1 ({$time1}ч)
- $task2 ({$time2}ч)
- $task3 ({$time3}ч)
Примерное время выполнения плана = {$totalTime}ч";