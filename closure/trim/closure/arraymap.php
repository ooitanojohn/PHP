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

$dist = array_map(function ($post): string {
  $post = str_replace(" ", "", $post);
  $post = trim($post);
  return $post;
}, $_POST);
// array_map()は各要素に関数を適用した配列を返すが、
// もとの配列変数$_POSTは何の変化がない状態のまま
var_dump($_POST);
var_dump($dist);
