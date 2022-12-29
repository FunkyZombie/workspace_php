<?php
$arr = array(115,56,78,56,-9,95,448,65,26,344,5,6,95);

function minInt(array $array):int {
  $value = $array[0];
  for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] < $value) {
      $value = $array[$i];
    }
  }
  return $value;
}

function maxInt(array $array):int {
  $value = $array[0];
  for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] > $value) {
      $value = $array[$i];
    }
  }
  return $value;
}

function mean(array $array):int {
  $result = 0;
  foreach($array as $value) {
    $result += $value;
  }
  return $result / count($array);
}

function func(array $array):array {
  $min = minInt($array);
  $max = maxInt($array);
  $mean = mean($array);
  return [$min, $mean, $max];
}

print_r(func($arr));