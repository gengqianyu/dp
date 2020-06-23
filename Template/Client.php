<?php

    //客户端
    function __autoload($class_name)
    {
        include $class_name . '.php';
    }

    class Client
    {
        public function __construct()
        {
            $mo = new TmFac();
            $mo->templateMethod();
        }
    }

    $worker = new Client();
    