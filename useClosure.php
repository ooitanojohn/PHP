 <?php
 /**
  * PH35 サンプル4 無名関数 Src09/09
  * 無名関数。
  *
  * @author Shinzo SAITO
  *
  * ファイル名=useClosure.php
  * ディレクトリ=/ph35/closure/
   */
  $sides = [1.5, 2.4, 3.3];
  array_walk($sides, function($side, $key): void {
       $cube = $side * $side * $side;
       print("1辺が".$side."の立方体の体積: ".$cube."<br>");
  });
