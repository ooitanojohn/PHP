<?php

$data = [
  'bool'   => true,
  'int'    => 1,
  'float'  => 1.23,
  'string' => 'foobar',
  'array'  => array(
    'apple',
    'orange',
    'strawberry'
  ),
  'key-value' => array(
    'jp' => 'Japan',
    'us' => 'USA',
    'cn' => 'China',
  ),
  'n-val' => array(
    '2-array-val', array('3-array-val', array('4-array-val'))
  ),
  'n-key-value' => array(array(array('4-array-key' => '4-array-val'), '3-array-key' => '3-array-val'), '2-array-key' => '2-array-val')
];

$file_n = "json2-3.csv";
$fp = fopen($file_n, "w");
// 再帰的に書かないと2次元以降の要素を出力できない部分
// foreach ($data as $key => $val) {
//   fwrite($fp, $key . "," . $val . "\n");
// };
//
/**
 * $n次元配列の配列要素をすべて出力する
 * @param array $data defalut = 0
 * @return string
 */
function n_array_string(array $data = []): string
{
  $string = ''; // 書きこむ文字列
  foreach ($data as $key => $val) {
    if (gettype($val) === "array") { // $valが配列であれば再帰呼び出しする
      $val = n_array_string($val); // 配列 $valをforeachしている
      // 呼び出し先の処理が終わりreturnされるとここに戻ってきてreturn値が$valに代入される $val = $string."\n"
      $val = rtrim($val, "\n"); // $val最終行の "\n"を削除
      // var_dump($val);
    }
    $string .= $key . "," . $val . "\n"; // stringにkey valueを追記
    // var_dump($key);
    // var_dump($string);
  };
  return $string;
}

$string = n_array_string($data);

fwrite($fp, $string . "\n");
fclose($fp);
