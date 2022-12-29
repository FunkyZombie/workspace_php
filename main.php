<?php 
$thisArr = array(4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2);

$oddOrEven = function(int $number) :bool {
  return $number % 2 === 0;
};

$newArr = array_map($oddOrEven, $thisArr);

print_r($newArr);