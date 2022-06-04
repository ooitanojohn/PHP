<?php

/**
 * $n次元配列の配列要素をすべて出力する
 * @param array $data defalut = 0
 * @return mixed
 */

$data = array(
  'bool'   => true,
  'int'    => 1,
  'float'  => 1.23,
  'string' => 'foobar',
  'array'  => array('apple', 'orange', 'strawberry'),
  'key-value' => array(
    'jp' => 'Japan',
    'us' => 'USA',
    'cn' => 'China',
  ),
);

$file_n = "json2-3.csv";
$fp = fopen($file_n, "w");
// 再帰的に書かないと処理できない部分
// foreach ($data as $key => $val) {
//   fwrite($fp, $key . "," . $val . "\n");
// };
//

function n_array_string(array $data = [])
{
  $string = ''; // 書きこむ文字列
  foreach ($data as $key => $val) {
    if (gettype($val) === "array") { // $valが配列であれば再帰呼び出しする
      $val = n_array_string($val); // 配列 $valをforeachしている
    }
    $string .= $key . "," . $val . "\n"; // stringにkey valueを追記
  };
  return $string;
}

$string = n_array_string($data);
var_dump($string);

fwrite($fp, $string);
fclose($fp);
