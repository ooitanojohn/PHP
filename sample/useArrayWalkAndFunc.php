 <?php
 /**
   * PH35 サンプル4 無名関数 Src08/09
   * 組み込み関数のコールバックと自作関数。
   *
   * @author Shinzo SAITO
   *
   * ファイル名=useArrayWalkAndFunc.php
   * ディレクトリ=/ph35/closure/
    */
  function showCube($side, $key): void {
        $cube = $side * $side * $side;
        print("1辺が".$side."の立方体の体積: ".$cube."<br>");
  }

  $sides = [1.5, 2.4, 3.3];
  array_walk($sides, "showCube");

