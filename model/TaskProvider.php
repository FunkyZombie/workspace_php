<?php

require_once 'Task.php';

class TaskProvider 
{
  private Array $tasks;
  private Array $undoneTasks;
  private PDO $pdo;

  function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
    $this->tasks = [];
    $this->undoneTasks = [];
  }

  public function getDoneList($userId): ?Array 
  {
    $statement = $this->pdo->prepare(
      "SELECT id, description, isDone  FROM tasks WHERE userId = :userId AND isDone = 1;"
    );

    $statement->execute([
      ':userId' => $userId
    ]);

    while ($row = $statement->fetchObject()) {
      $this->undoneTasks[] = new Task($row->description, $row->id, $row->isDone);
    }

    return $this->undoneTasks ?: null;
  }

  public function fetchTasks($userId): ?Array
  {
    $statement = $this->pdo->prepare(
      "SELECT id, description, isDone  FROM tasks WHERE userId = :userId AND isDone = 0;"
    );

    $statement->execute([
      ':userId' => $userId
    ]);

    while ($row = $statement->fetchObject()) {
      $this->tasks[] = new Task($row->description, $row->id, $row->isDone);
    }

    return $this->tasks ?: null;
  }

  public function addTask(Task $task):bool 
  {
    $statement = $this->pdo->prepare(
      'INSERT INTO tasks (userId, description, isDone) VALUES (:userId, :description, :isDone)'
    );

    return $statement->execute([
      'userId' => $_SESSION['userId'],
      'description' => $task->getDescription(),
      'isDone' => 0,
    ]);
  }

  public function setIsDone($id)
  {
    $statement = $this->pdo->prepare(
      'UPDATE tasks SET isDone = 1 WHERE id = :id;'
    );

    return $statement->execute([
      'id' => $id,
    ]);
  }
}