 <?php
 /**
   * PH35 サンプル4 無名関数 Src06/09
   * コールバック関数。
   *
   * @author Shinzo SAITO
   *
   * ファイル名=useCallbackFunction.php
   * ディレクトリ=/ph35/closure/
    */
  function hello(string $name): string {
        return $name."さん、こんにちは!";
  }

  function goodMorning(string $name): string {
        return $name."さん、おはよう!";
  }

  function useGreetings(callable $funcName): void {
        $result = $funcName("しんちゃん");
        print($result."<br>");
  }

  useGreetings("hello");
  useGreetings("goodMorning");

