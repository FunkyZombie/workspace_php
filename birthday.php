<?php
$words = array('счастья', 'здоровья', 'терпения', 'веселья');
$epithet = array('крепкого', 'бесконечного', 'безудержного', 'громового', 'наилучшего');
$result = [];

for ($i = 0; $i < 3; $i++) {
  $w = array_rand($words);
  $e = array_rand($epithet);
  if ($i === 1) {
    $result[] = ', '.$epithet[$e].' '.$words[$w];
    continue;
  }
  if ($i === 2) {
    $result[] = " и ".$epithet[$e].' '.$words[$w].'!';
    break;
  }
  $result[] = $epithet[$e].' '.$words[$w];
}

$name = readline('Введите имя: ');

print_r('Дорогой '.$name.', от всего сердца поздравляем тебя с днем рождения, желаем '.implode($result));