 <?php
  /**
   * PH35 サンプル8 名前空間 Src07/08
   * オートロード
   * オートロードファイル。
   *
   * @author Shinzo SAITO
   *
   * ファイル名=autoload.php
   * フォルダ=/ph35/namespaces/
   */
  function myAutoload(string $classname): void
  {
    $classNameArray = explode("\\", $classname);
    $filepath = "";
    for ($i = 2; $i < count($classNameArray); $i++) {
      $filepath .= "/" . $classNameArray[$i];
    }
    $filepath = $_SERVER["DOCUMENT_ROOT"] . "/ph35/namespaces" . $filepath . ".php";
    if (is_file($filepath)) {
      require_once($filepath);
    }
  }

  spl_autoload_register("myAutoload");
