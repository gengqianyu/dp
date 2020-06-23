<?php

    namespace Factory;

    spl_autoload_register(function ($class_name) {
        require_once str_replace("\\", "/", "../" . $class_name) . ".php";
    });

    class Client
    {
        private $graphicObject;
        private $textObject;

        public function __construct()
        {
            //图形
            $this->graphicObject = new GraphicFactory();
            echo $this->graphicObject->startFactory() . "<br>\r\n";
            //文本
            $this->textObject = new TextFactory();
            echo $this->textObject->startFactory();
        }
    }

    new Client();