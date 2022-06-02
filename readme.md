# 配列処理とかあれこれ

## callback
## [foreach || arraymap || arraywalk](https://qiita.com/tadsan/items/0790bbb9a4d1b8264b23)
  - arraymapは要素を操作する関数
    - [返り値に操作後の配列が帰ってくる](./trim/callback//arraymap.php)
    - callback関数内でreturnする操作が必要
  - arraywalkは操作範囲が広い $index $value $prefix(付け加える要素)
    - 返り値はtrue | false
    - callback関数内で$key操作が可能
    - 本質的に大きくことなる特徴として、array_walk()は配列そのものではなく、配列変数と要素のリファレンス(参照&)を操作の対象とする
      - callback関数内で要素
      - [参照どうなの](https://qiita.com/tadsan/items/74f992dcc48216b571bd)
    - [変更を反映させる方法として&(リファレンス)を要素の前につけるか](./trim/cal/../callback/arraywalk2.php)
    - [グローバル変数に強引に代入する(強引だな..多分良くない)](./trim/callback//arraywalk.php)
  - [foreachでいい](./trim/callback//foreach.php)
    - 関数じゃなく言語構造なので変数代入した際のスコープが使いやすい。

### return する関数である限り、配列の要素をindexでそれぞれ変数として代入するのは難しい気がする
### post値を受け取って、それぞれindexを変数名とした文字列で受け取る場合、foreachでいいかも

## [closure化したのがこれ](./trim/closure/)

## [array_walk_recursive とは](https://qiita.com/tadsan/items/0790bbb9a4d1b8264b23#%E3%81%8A%E3%81%BE%E3%81%912-array_walk_recursive)