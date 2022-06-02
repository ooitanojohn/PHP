 <?php
 /**
   * PH35 サンプル4 無名関数 Src04/09
   * 引数のアンパック。
   *
   * @author Shinzo SAITO
   *
   * ファイル名=useUnpackArgs.php
   * ディレクトリ=/ph35/closure/
    */
  function greet(string $greet1, string $greet2, string $greet3): void {
        $msg = "しんちゃんさん、".$greet1."<br>それから、".$greet2."<br>そして、".$greet3;
        print($msg);
  }

  $greetings = ["おはよう", "こんにちは", "こんばんは"];
  greet(...$greetings);

