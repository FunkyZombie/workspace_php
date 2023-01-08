<?php

require_once 'model/User.php';
require_once 'model/TaskProvider.php';

session_start();

$pageHeader = "Задачи";
$taskProvider = new TaskProvider();
$taskProvider->getTaskOfSession();

$username = null;
$tasks = null;

if (!empty($taskProvider->getUndoneList())) {
    $tasks = $taskProvider->getUndoneList();
};

if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getUsername();
}

if (isset($_POST["task"])) {
    $taskProvider->addTask($user->getUsername(), $_POST["task"]);
    header("Location: /?controller=tasks");
}

include "view/tasks.php";


