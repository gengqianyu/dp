<?php

//代理安全验证类 实现ISubject接口
    include_once 'ISubject.php';
    include_once 'UniversalConnect.php';
    include_once 'RealSubject.php';

    class Proxy implements ISubject {

        private $tableMaster;
        private $hookup;
        private $logGood;
        private $realSubject;

        public function login($userName, $password) {
            //由客户端过滤；对口令掩码
            $uname = $userName;
            $password = md5($password);
            $this->logGood = FALSE;
            //选择表和链接
            $this->tableMaster = "proxyLog";
            $this->hookup = UniversalConnect::doConnect();
            //创建sql语句
            $sql = "SELECT pw FROM " . $this->tableMaster . " WHERE user_name='" . $uname . "'";
            if ($result = $this->hookup->query($sql)) {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                if ($row['pw'] == $password) {
                    $this->logGood = TRUE;
                }
                $result->close();
            } elseif (($result = $this->hookup->query($sql) === FALSE)) {
                printf("Failed:%s <br>", $this->hookup->error);
                exit();
            }
            $this->hookup->close();
            if ($this->logGood) {
                $this->request();
            } else {
                echo " uname and/or password not on record";
            }
        }

        public function request() {
            $this->realSubject = new RealSubject();
            $this->realSubject->request();
        }

    }
    