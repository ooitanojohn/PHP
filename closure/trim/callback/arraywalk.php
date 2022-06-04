<?php

$_POST = [
  "addEmpId" => "1  ",
  "addEmpName" => "2 f",
  "addEmpJob" => " 3",
  "addEmpMgr" => "4 f f ",
  "addEmpHiredate" => " df ",
  "addEmpSal" => "6",
];
// 配列内の要素全ての空白を削除する
function triming($post, $key): void
{
  $post = str_replace(" ", "", $post);
  $post = trim($post);

  // ${$key} = $post; // 関数内のscopeでしか反映されない
  // return $post; // 返り値を返しても arraywalkの返り値はboolean
  $_POST[$key] = $post; // 直接グローバル変数を上書き
}

// arraywalkの返り値はboolean
$dist = array_walk($_POST, "triming");

// var_dump($addEmpId);
var_dump($dist);
var_dump($_POST);
