<?php

    //原型设计模式
    //使用clone关键字可以创建一个对象副本（如果可能，会调用对象的__clone（）方法）。但不能
    //直接调用对象的__clone()方法。
    abstract class CloneMe
    {

        public $name;
        public $age;

        abstract function __clone();
    }

    class Person extends CloneMe
    {

        public function __construct()
        {
            echo "hello construct\r\n";
            $this->name = 'Xiao Ming';
            $this->age = 20;
        }

        public function display()
        {
            echo $this->name . '__' . $this->age . "\r\n";
        }

        public function __clone()
        {
            echo "hello clone\r\n";
        }
    }

    $worker = new Person();
    $worker->display();
    echo '<br>';
    // clone 不能执行__construct 但是可以执行__clone
    $slacker = clone $worker;
    $slacker->name = 'xiao Geng';
    $slacker->display();