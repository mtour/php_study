<?php
/**
 * Created by IntelliJ IDEA.
 * User: cwliu
 * Date: 2017/8/9
 * Time: 下午5:04
 */

function test(&$num){
    $num++;
}

$v1 = 10 ;

test($v1);

echo $v1."<br>";