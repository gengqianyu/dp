<?php
    //抽象工厂
    namespace NewFactory;

    spl_autoload_register(function ($class_name) {
        require_once str_replace("\\", "/", "../" . $class_name) . ".php";
    });

    class Client
    {
        private $countryFactory;

        public function __construct()
        {

            $this->countryFactory = new CountryFactory();
            echo $this->countryFactory->doFactory(new China());
        }
    }

    new Client();
    