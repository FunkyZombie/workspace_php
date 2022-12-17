<?php

$index = (int) readline('Введите число: ');
$res = $index;

if ($index > 5) {
  $check = ($index-1) % 8;
  if ($check <= 4)
      $res = $check + 1;
  elseif ($check > 4)
      $res = 9 - $check;
}

echo $res;