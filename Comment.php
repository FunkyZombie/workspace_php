<?php

class Comment {
  public User $author;
  public Task $task;
  public string $text;

  function __construct(User $author, Task $task, $text)
  {
    $this->author = $author;
    $this->task = $task;
    $this->text = $text;
  }
}
  
  
