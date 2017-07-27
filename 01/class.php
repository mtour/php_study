<?php
/**
 * Created by IntelliJ IDEA.
 * User: cwliu
 * Date: 2017/7/25
 * Time: 下午8:44
 */

class Person{
    public $name = "";
    public $age = 18;

    function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
        echo "__construct run <br>";
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.

        echo "__destruct run ";
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

}

$p = new Person("zhangsan",21);

echo $p->getName()." ".$p->getAge()."<br>";