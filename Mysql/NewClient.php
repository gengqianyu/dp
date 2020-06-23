<?php

    function __autoload($class_name) {
        include $class_name . '.php';
    }

    class NewClient {

        private $queryNow;

        public function __construct() {
            $_POST['sendNow'] = true;
            $_POST['help'] = "q5";
            if (isset($_POST['sendNow'])) {
                $this->queryNow = $_POST['help'];
            }
            $q1 = new Q1();
            $q2 = new Q2();
            $q3 = new Q3();
            $q4 = new Q4();
            $q5 = new Q5();
            //设置后继
            $q1->setSuccessor($q2);
            $q2->setSuccessor($q3);
            $q3->setSuccessor($q4);
            $q4->setSuccessor($q5);
            //生成和处理加载请求
            $loadup = new Request($this->queryNow);
            //设置首链 参数为一个请求对象，作用其实也就是传参，保护参数
            $q1->handleRequest($loadup);
        }

    }

    $worker = new NewClient();
    