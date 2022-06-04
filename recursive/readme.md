# [再帰関数](https://qiita.com/drken/items/23a4f604fa3f505dd5ad#1-%E5%86%8D%E5%B8%B0%E9%96%A2%E6%95%B0%E3%81%A8%E3%81%AF)

## 自分自身を呼び出す関数を再帰的 (recursive) であると呼び、再帰的な関数のことを再帰関数 (recursive function) と呼びます。また再帰的に関数を呼び出すことを再帰呼び出し (recursive call) と呼びます。

```php
function func(引数) : 戻り値の型{
  if (ベースケース) {
    return ベースケースに対する値;
  }
  func(次の引数); // 再帰呼び出しします。その前後でも色々やります。
  return (答え);
}
```
## ポイントとしては、以下の条件を満たすように再帰関数を設計します。

- ベースケースに対して return する処理を必ず入れる → 自分自身を呼び出していないreturnをすることで呼び出しが終了
- 再帰呼び出しを行ったときの問題が、元の問題よりも小さな問題となるように再帰呼び出しを行い、そのような「より小さい問題の系列」が最終的にベースケースに辿り着くようにする

## 処理としてどうなっている？
- [スライドみたらわかる](https://atcoder.jp/contests/apg4b/tasks/APG4b_v?lang=ja)

# [本題 n次元配列の要素をすべて出力する](./recursive_function_2.php)
- n次元の要素が入り乱れている配列
- ベースケースとしては全て出力すれば終了

```php
function n_array_string(array $data = []):string
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
```

### 全て出力するが,何回か空をループしているパターンがある
```PHP テストデータ
$data = [
  'bool'   => true,
  'key-value' => array(
    'jp' => 'Japan',
    'us' => 'USA',
    'cn' => 'China',
  ),
```

```php 条件式にelseを記述した場合(1 < n)次元配列の要素は追記されない
  foreach ($data as $key => $val) {
    if (gettype($val) === "array") { // $valが配列であれば再帰呼び出しする
      $val = n_array_string($val); // 配列 $valをforeachしている
    }else{
      $string .= $key . "," . $val . "\n"; // stringにkey valueを追記
    }
  };
```

```PHP if条件式でvalが配列以外を指定した場合(1 < n)次元配列の要素は追記される
  foreach ($data as $key => $val) {
    if (gettype($val) === "array") { // $valが配列であれば再帰呼び出しする
      $val = n_ar
      ray_string($val); // 配列 $valをforeachしている
    }
    if (gettype($val) !== "array") {
      $string .= $key . "," . $val . "\n"; // stringにkey valueを追記
    }
  };
```

```PHP vardumpで$string出力した結果
foreach ($data as $key => $val) {
    if (gettype($val) === "array") { // $valが配列であれば再帰呼び出しする
      $val = n_array_string($val); // 配列 $valをforeachしている
    }
    $string .= $key . "," . $val . "\n"; // stringにkey valueを追記
    vardump($string);
  };
  // 呼び出し結果
vardump:string 'bool,1
' (length=7)

// 条件式に当てはまり再帰呼び出し foreach ($key-value as $key => $value) {
vardump:string 'jp,Japan
' (length=9)
vardump:string 'jp,Japan
us,USA
' (length=16)
vardump:string 'jp,Japan
us,USA
cn,China
' (length=25)
foreach が終わり, $stringをreturnしている
}
// 何故結合できる？
vardump:string 'bool,1
key-value,jp,Japan
us,USA
cn,China

' (length=43)
```
### いくつかの分からない所がある
$string の初期化; // 関数呼び出し事に初期化される
$string = 'bool,1' と $stirng = 'jp,Japan\nus,USA\ncn,China'が何故結合している？

再帰呼び出しした後何故

```PHP 確認用テストデータ
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
```