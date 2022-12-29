<?php

include_once "User.php";
include_once "Task.php";
include_once "Comment.php";
include_once "TaskService.php";

$user = new User('test.email', 'Alice');
$task = new Task($user, 'Вербовать улиток', 2);

TaskService::addComment($user, $task, 'Firs comment');

print_r($task);