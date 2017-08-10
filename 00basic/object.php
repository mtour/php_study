<?php
/**
 * Created by IntelliJ IDEA.
 * User: cwliu
 * Date: 2017/8/9
 * Time: 下午5:16
 */

class Person
{
    private $a = 1;

    /**
     * @return int
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @param int $a
     */
    public function setA($a)
    {
        $this->a = $a;
    }


}

$p1 = new Person();
$p1->setA(100);

echo $p1->getA()."<br>";

$p2 = $p1;   //  对象是按照引用传递的

echo $p2->getA()."<br>";