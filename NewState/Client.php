<?php

    function __autoload($class_name)
    {
        include $class_name . '.php';
    }

    class Client
    {
        private $context;

        public function __construct()
        {
            $this->context = new Content();
            $this->context->doUp();
            $this->context->doRight();
            $this->context->doDown();
            $this->context->doDown();
            $this->context->doLeft();
            $this->context->doUp();
            $this->context->doLeft();
        }

    }

    $worker = new Client();