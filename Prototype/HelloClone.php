<?php

    //克隆不会启用构造函数中的动作，克隆可以使用构造函数生成的默认值，但是如果构造函数生成一个动作，
    //如实例化就打印一条消息，克隆并不会显示这个消息。
    class HelloClone
    {
        private $builtInConstructor;

        public function __construct()
        {
            echo "hello clone<br>\r\n";
            $this->builtInConstructor = "constructor creation<br>\r\n";
        }

        public function doWork()
        {
            echo $this->builtInConstructor;
            echo "I'm doing the work<br>\r\n";
        }
    }

    //启动构造函数
    $original = new HelloClone();
    $original->doWork();
    //克隆不启动构造函数
    echo "-----------------------------------<br>\r\n";
    //原型并未执行构造函数 hello clone 并未输出
    $cloneIt = clone $original;
    $cloneIt->doWork();