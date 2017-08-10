<?php
/**
 * Created by IntelliJ IDEA.
 * User: cwliu
 * Date: 2017/8/9
 * Time: 下午5:12
 */

$arr["a"] = " string a";
$arr["b"] = " string b";

var_dump($arr);

$arr2 = $arr;   // 数组是值传递

$arr2["a"] = "modified string a";


var_dump($arr);