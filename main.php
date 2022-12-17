<?php

do { 
  $answer = (int) readline('В каком году произошло крещение Руси? Варианты: 810, 988 или 740 год: ');
  if ($answer === 988) {
    echo 'Вы ответили верно! Ваш ответ: ' . $answer;
    break;
  }
  if ($answer === 810 || $answer === 740) {
    echo "Вы ответили неверно. Ваш ответ: " . $answer;
    break;
  }
} while ($answer);