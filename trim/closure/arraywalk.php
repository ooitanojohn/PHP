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
array_walk($_POST, function ($post, $key): void {
  $post = str_replace(" ", "", $post);
  $post = trim($post);
  $_POST[$key] = $post; // 直接グローバル変数を上書き
});
var_dump($_POST);
