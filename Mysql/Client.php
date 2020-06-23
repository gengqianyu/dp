<?php
//安全代理登录，登录模块把请求发送到Client类，client类从html5表单获取登录数据，并进一步通过porxy
// login方法将请求转发给proxy。当然用户是不会看到这些的，用户只会看到realsubject的输出。
    require_once 'Proxy.php';

    class Client {

        private $proxy;
        private $user_name;
        private $pw;

        public function __construct() {
            $_POST['user_name'] = "gengqianyu";
            $_POST['pw'] = "198825";
            $this->user_name = trim($_POST['user_name']);
            $this->pw = trim($_POST['pw']);
            $this->getIface($this->proxy = new Proxy());
        }

        private function getIface(ISubject $proxy) {
            //$proxy就是$this->proxy;
            $proxy->login($this->user_name, $this->pw);
        }

    }

    $worker = new Client();
    