<?php

require_once 'Task.php';

class TaskProvider {
  private Array $tasks = [];

  public function getUndoneList():Array 
  {
      return $this->tasks;
  }

  private function addTaskOnSession(string $id, $tasks):void 
  {
    $_SESSION['tasks'][$id] = $tasks;
  }

  public function addTask(string $user, string $description):void 
  {
    $id = uniqid();
    $task = new Task($user, $description, $id);
    $this->addTaskOnSession($id, $task);
    // $this->tasks[$id] = $task;
  }

  public function getTaskOfSession():void 
  {
    if (isset($_SESSION["tasks"])) {
      $this->tasks = $_SESSION["tasks"];
    }
  }
}