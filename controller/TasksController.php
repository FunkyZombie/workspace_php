<?php

require_once 'model/User.php';
require_once 'model/TaskProvider.php';

session_start();

$pageHeader = "Задачи";
$pdo = require 'db.php';
$taskProvider = new TaskProvider($pdo);

$username = null;
$tasks = null;
$tasksDone = null;


if (isset($_SESSION['username'])) 
{
    $user = $_SESSION['username'];
    $username = $user->getUsername();
}

if (isset($_SESSION['userId'])) 
{
    $tasks = $taskProvider->fetchTasks($_SESSION['userId']) ?: null;
    $tasksDone = $taskProvider->getDoneList($_SESSION['userId']) ?: null;
}

if (isset($_POST["task"])) 
{
    $taskProvider->addTask(new Task($_POST["task"]));
    header("Location: /?controller=tasks");
    die();
}

if (isset($_GET['action'], $_GET['taskId']) && $_GET['action'] === 'isdone') 
{
    $taskProvider->setIsDone($_GET['taskId']);
    header('Location: /?controller=tasks');
    die();
}

include "view/tasks.php";


