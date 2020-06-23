<?php

    include_once 'UniversalConnect.php';

    class HashRegister {

        private $tableMaster;
        private $hookup;

        public function __construct() {
            $_POST['user_name'] = "gengqianyu";
            $_POST['pw'] = "198825";
            $this->tableMaster = "proxyLog";
            $this->hookup = UniversalConnect::doConnect();
            $userName = trim($_POST['user_name']);
            $passWord = trim($_POST['pw']);
            $sql = "INSERT INTO " . $this->tableMaster . " (user_name,pw)VALUES('" . $userName . "','" . md5($passWord) . "')";
            if ($this->hookup->query($sql)) {
                echo "Registration completed";
            } elseif (($result = $this->hookup->query($sql) === FALSE)) {
                printf("Invalid query:%s <br/> Whole query:%s <br/>", $this->hookup->error, $sql);
                exit();
            }
            $this->hookup->close();
        }

    }

    $worker = new HashRegister();
    