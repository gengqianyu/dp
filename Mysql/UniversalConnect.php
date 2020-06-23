<?php

//通用mysql链接类和静态变量。
    include_once 'IConnectInfo.php';

    class UniversalConnect implements IConnectInfo {

        private static $server = IConnectInfo::HOST;
        private static $currentDB = IConnectInfo::BDNAME;
        private static $user = IConnectInfo::UNAME;
        private static $pass = IConnectInfo::PW;
        private static $hookup;

//链接方法
        public static function doConnect() {
            self::$hookup = mysqli_connect(self::$server, self::$user, self::$pass, self::$currentDB, 3306);

            if (self::$hookup) {
                //调试
                echo "successful connection to MYSQL";
            } elseif (mysqli_connect_error(self::$hookup)) {
                echo "here is why it failed:" . mysqli_connect_error();
            }
            return self::$hookup;
        }

    }
    