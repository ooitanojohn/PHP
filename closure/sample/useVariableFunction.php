 <?php
 /**
   * PH35 サンプル4 無名関数 Src05/09
   * 可変関数。
   *
   * @author Shinzo SAITO
   *
   * ファイル名=useVariableFunction.php
   * ディレクトリ=/ph35/closure/
    */
  function hello(string $name): void {
        $msg = $name."さん、こんにちは!<br>";
        print($msg);
  }

  $funcName = "hello";
  $funcName("しんちゃん");

