<?php

class Task 
{
  private string $description;
  private bool $isDone = false;
  private $id;
  private string $user;

  function __construct(string $user, string $description, $id) {
    $this->user = $user;
    $this->description = $description;
    $this->id = $id;
  }  

  private function setIsDone($value):void 
  {
    $this->isDone = $value;
  }

  public function getDescription():string 
  {
    return $this->description;
  }
}