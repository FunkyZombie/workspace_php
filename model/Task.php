<?php

class Task 
{
  private string $description;
  private bool $isDone;
  private int $idTask;

  function __construct(string $description, int $idTask = 0, bool $isDone = false) 
  {
    $this->description = $description;
    $this->isDone = $isDone;
    $this->idTask = $idTask;
  }

  public function getDescription():string 
  {
    return $this->description;
  }

  public function getId(): ?int
  {
    return $this->idTask ?: null;
  }

  public function getIsDone():bool 
  {
    return $this->isDone;
  }
}
