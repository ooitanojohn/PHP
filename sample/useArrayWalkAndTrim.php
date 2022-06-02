 <?php
 /**
  * PH35 サンプル4 無名関数 Src07/09
  * 組み込み関数のコールバック。
  *
  * @author Shinzo SAITO
  *
  * ファイル名=useArrayWalkAndTrim.php
  * ディレクトリ=/ph35/closure/
   */
  $params = [" 齊藤 ", " 新三 ", " プログラマ "];
  print("<pre>");
  var_dump($params);
  print("</pre>");
  $trimedParams = array_map("trim", $params);
  print("<pre>");
  var_dump($trimedParams);
  print("</pre>");

