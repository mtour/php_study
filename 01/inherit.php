<?php
/**
 * Created by IntelliJ IDEA.
 * User: cwliu
 * Date: 2017/7/26
 * Time: 下午2:37
 */

class Product {
    private $name = "";
    private $number = 0 ;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }
}

class CDProduct extends Product{
    function __construct($name,$number)
    {
        $this->setName($name);
        $this->setNumber($number);
    }
}

$c = new CDProduct("jay",10);

echo $c->getName()."  ".$c->getNumber()."<br>";