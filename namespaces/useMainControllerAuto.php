<?php

/**
 * PH35 サンプル8 名前空間 Src08/08
 * オートロード
 * 実行ファイル
 *
 * @author Shinzo SAITO
 *
 * ファイル名=useMainControllerAuto.php
 * フォルダ=/ph35/namespaces/
 */
require_once("autoload.php");

use LocalHalPH35\Namespaces\classes\MainController;

$controller = new MainController();
