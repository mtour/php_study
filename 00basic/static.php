<?php
/**
 * Created by IntelliJ IDEA.
 * User: cwliu
 * Date: 2017/8/9
 * Time: 下午4:56
 */

function test(){
    static $a = 0;

    $a ++;

    echo $a."<br>";
}

test();
test();
test();

echo "static a ".$a;   //  函数外不能访问