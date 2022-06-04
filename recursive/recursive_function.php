<?php

declare(strict_types=1); // php8.1から宣言不要になった
/**
 * $n以下の正の整数の総和
 * @param int defalut = 0
 * @return int 総和
 */

function sum(int $n = 0): int
{
  if ($n === 0) { // $nが0になったら処理する return値で自分自身を呼び出していないので処理が終了
    return 0;
  }
  $sum = $n + sum($n - 1); //
  return $sum;
}

$n = 0;
while ($n < 10) {
  echo $n . "までの総和は" . sum($n) . "<br>";
  $n++;
}
