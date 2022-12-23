<?php

$arr1 = range(2, 11);
$arr2 = range(16, 25);
$result = array();

foreach ($arr1 as $k => $v) {
  $result[] = $arr1[$k] * $arr2[$k];
}

print_r($result);