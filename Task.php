<?php

class Task 
{
  private string $description;
  private DateTime $dateCreated;
  private DateTime $dateUpdate;
  private DateTime $dateDone;
  private int $priority;
  private bool $isDone = false;
  private User $user;
  private array $comments = [];

  function __construct(User $user, string $description, int $priority) {
    $this->user = $user;
    $this->description = $description;
    $this->priority = $priority;

    $this->dateCreated = new DateTime();
  }  
  
  public function getDate():object
  {
    return $this->dateCreated;
  }

  private function setDateUpdate($date):void
  {
    $this->dateUpdate = $date;
  }

  private function setDateDone($date):void
  {
    $this->dateDone = $date;
  }

  private function setIsDone($value):void 
  {
    $this->isDone = $value;
  }

  public function setDescription(string $newDescription):void 
  {
    $this->description = $newDescription;
    $this->setDateUpdate();
  }

  public function setComment($comment):void
  {
    $this->comments[] = $comment;
  }

  public function markAsDone():void
  {
    $this->setIsDone(true);
    $this->setDateUpdate(new DateTime());
    $this->setDateDone(new DateTime());
  }
}