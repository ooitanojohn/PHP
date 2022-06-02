<?php

$_POST = [
  "addEmpId" => "1  ",
  "addEmpName" => "2 f",
  "addEmpJob" => " 3",
  "addEmpMgr" => "4 f f ",
  "addEmpHiredate" => " df ",
  "addEmpSal" => "6",
];
// 初期化
$addEmpId = '';
$addEmpName = '';
$addEmpJob = '';
$addEmpMgr = '';
$addEmpHiredate = '';
$addEmpSal = '';
// 配列内の要素全ての空白を削除する
foreach ($_POST as $key => $val) {
  $val = str_replace(" ", "", $val);
  ${$key} = trim($val);
}
var_dump($_POST);
var_dump($addEmpId);
var_dump($addEmpName);
var_dump($addEmpJob);
var_dump($addEmpMgr);
var_dump($addEmpHiredate);
var_dump($addEmpSal);
