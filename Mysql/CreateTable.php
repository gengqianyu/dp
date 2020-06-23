<?php

//创建用户表
    include 'UniversalConnect.php';

    class CreateTable {

        private $tableMaster;
        private $hookup;

        public function __construct() {
            $this->tableMaster = "proxyLog";
            $this->hookup = UniversalConnect::doConnect();
            $dorp = "DORP TABLE IF EXISTS $this->tableMaster";
            if ($this->hookup->query($dorp) === TRUE) {
                printf("Old table %s has been dropped.<br>", $this->tableMaster);
            }
            $sql = "CREATE TABLE `" . $this->tableMaster . "`( "
                    . "`user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户ID',"
                    . "`user_name` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '用户名',"
                    . "`pw` VARCHAR (120) NOT NULL DEFAULT '' COMMENT '密码',"
                    . "PRIMARY KEY (`user_id`),"
                    . "UNIQUE KEY `user_name` (`user_name`)"
                    . ")ENGINE=InnoDB DEFAULT CHARSET=UTF8 COMMENT='用户信息表'";
            if ($this->hookup->query($sql) === TRUE) {
                echo "table " . $this->tableMaster . " has been created successfully<br>";
            } else {
                echo '<br>';
                echo mysqli_error($this->hookup);
                exit;
            }
            $this->hookup->close();
        }

    }

    $worker = new CreateTable();
    