<?php
$countTask = (int) readline('Введите количество задач запланированных на день: ');
$tasks = '';
$timeCount = 0;

for ($i = 1; $i <= $countTask; $i++) {
  $task = (string) readline($i . ' задача: ');
  $time = (int) readline("Солько времени это займет? ");
  $tasks = $tasks . "$i задача: $task {$time}ч;\n";
  $timeCount += $time;
};

echo $tasks . "Всего: {$timeCount}ч";