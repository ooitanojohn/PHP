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
// arraywalkの返り値はboolean
array_walk($_POST, function (&$post, $key): void {
  $post = str_replace(" ", "", $post);
  $post = trim($post);
});
var_dump($_POST);
