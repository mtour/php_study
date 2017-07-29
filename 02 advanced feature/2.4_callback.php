<?php
/**
 * Created by IntelliJ IDEA.
 * User: cwliu
 * Date: 2017/7/27
 * Time: 上午11:47
 */

class person{
    private  $name;
    function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}

class process{
    private $callback;
    public function registerCallBack($callback){
        $this->callback = $callback;
    }

    public function docall($person){
        call_user_func($this->callback,$person);
    }
}

$fun1 = function ($person){
    print "fun1 .... ".$person->getName();
};

$process = new process();
$process->registerCallBack($fun1);
$process->docall(new person("张三"));