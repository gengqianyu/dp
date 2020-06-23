<?php

//重要接口
    interface IConnectInfo {

        const HOST = "localhost";
        const UNAME = "root";
        const PW = "root";
        const BDNAME = "dppatt";

        public static function doConnect();
    }
    