<?php
  $name = readline("Введите имя: ");
  $task1 = readline("Задача 1: ");
  $time_task1 = readline("Солько времени это займет?: ");
  $task2 = readline("Задача 2: ");
  $time_task2 = readline("Солько времени это займет?: ");
  $task3 = readline("Задача 3: ");
  $time_task3 = readline("Солько времени это займет?: ");
  $total_time = $time_task1 + $time_task2 + $time_task3;

  echo <<<END
    $name, сегодня у вас запланировано 3 приоритетных задачи на день:
    - $task1 ({$time_task1}ч)
    - $task2 ({$time_task2}ч)
    - $task3 ({$time_task3}ч)
    Примерное время выполнения плана = {$total_time}ч
  END;