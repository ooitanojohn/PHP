 <?php
 /**
   * PH35 サンプル4 無名関数 Src02/09
   * 引数のデフォルト値。
   *
   * @author Shinzo SAITO
   *
   * ファイル名=useDefaultArgs.php
   * ディレクトリ=/ph35/closure/
    */
  function hello(string $name = "名無し"): void {
        $msg = $name."さん、こんにちは!<br>";
        print($msg);
  }

  hello("しんちゃん");
  hello();

