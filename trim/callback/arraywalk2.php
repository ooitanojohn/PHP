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
function triming(&$post, $key): void // &(リファレンスをつけることで更新された値を返す)
{
  $post = str_replace(" ", "", $post);
  $post = trim($post);
  // $_POST[$key] = $post; // グローバル変数なのでreturnで配列を返すmapと違って代入する必要がある
  // return $post; // 返り値を返しても関係ない arraywalkの返り値はboolean
  // ${$key} = $post; // 関数内のscopeでしか反映されない
}

// arraywalkの返り値はboolean
$dist = array_walk($_POST, "triming");
var_dump($dist);

var_dump($_POST);
// var_dump($addEmpJob);
