<?php

    function __autoload($class_name) {
        include $class_name . '.php';
    }

    class Client {

        private $context;

        public function __construct() {
            $this->context = new Content();//默认context对象是offState对象
            $this->context->turnOnLight();//开灯 当前对象是off对象请求动作
            $this->context->turnBrighterLight();//更亮 当前对象是on对象请求动作
            $this->context->turnBrightestLight();//最亮 当前对象是更亮对象请求动作
            $this->context->turnOffLight();//关灯 当前对象是最亮对象请求动作
        }

    }
    
    $worker=new Client();
    