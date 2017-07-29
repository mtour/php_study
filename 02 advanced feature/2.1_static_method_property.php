<?php
/**
 * Created by IntelliJ IDEA.
 * User: cwliu
 * Date: 2017/7/27
 * Time: 上午11:38
 */

class StaticObject{
    static public $num = 0;
    static public function addnum(){
        self::$num++;
        echo self::$num."<br>";
    }

    public function getnum(){
        return self::$num;
    }
}

StaticObject::addnum();
StaticObject::addnum();
StaticObject::addnum();
StaticObject::addnum();
StaticObject::addnum();


echo (new StaticObject())->getnum();