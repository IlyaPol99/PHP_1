<?php
require_once 'User.php';
require_once 'Task.php';
require_once 'TaskService.php';
require_once 'Comment.php';

$user = new User('Вася');
$task = new Task($user, 'Задача 1', 3);

// Проверка первой части ДЗ
echo "------- Проверка 1 части ДЗ -------" . PHP_EOL;

echo "Description: " . $task->getDescription() . PHP_EOL
    . "DateCreated: " . $task->getDateCreated()->format('d.m.Y H:i:s') . PHP_EOL;
sleep(1); // задержка,чтобы было видно изменение времени

echo "------- Обновляем Description задачи -------" . PHP_EOL;

$task->setDescription('Первая задача');
echo "Description: " . $task->getDescription() . PHP_EOL
    . "DateUpdated: " . $task->getDateUpdated()->format('d.m.Y H:i:s') . PHP_EOL
    . ($task->getIsDone() ? "Задача выполнена" : "Задача ещё в работе") . PHP_EOL;
sleep(1);

echo "------- Отмечаем, что задача завершена -------" . PHP_EOL;

$task->markAsDone();
echo "DateUpdated: " . $task->getDateUpdated()->format('d.m.Y H:i:s') . PHP_EOL
    . "DateDone: " . $task->getDateDone()->format('d.m.Y H:i:s') . PHP_EOL
    . "Description: " . $task->getDescription() . PHP_EOL
    . ($task->getIsDone() ? "Задача выполнена" : "Задача ещё в работе") . PHP_EOL;

echo "------- Конец 1 части -------" . PHP_EOL;
echo PHP_EOL;

// Проверка второй части ДЗ
echo "------- Проверка 2 части ДЗ -------" . PHP_EOL;

TaskService::addComment($user, $task, "Покормить кошку.");
TaskService::addComment($user, $task, "Напоить кошку.");
foreach ($task->getComments() as $row) {
    echo "Комментарий к задаче '"
        . $row->getTask()->getDescription() . "': " . PHP_EOL
        . $row->getText() . PHP_EOL
        . "Автор: " . $row->getAuthor()->getUsername() . PHP_EOL;
}

echo "------- Конец 2 части -------" . PHP_EOL;