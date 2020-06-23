<?php

    /**
     * 类描述
     * =====================================================================
     * 功能描述
     *
     * =====================================================================
     * encoding UTF-8
     * author 耿乾钰;
     * link 401269150@qq.com;
     * datetime 2015-1-29 14:31:50
     */

//定义本脚本的命名空间

    namespace IMooc\Database;

//声明当前使用的空间
    use IMooc\IDatabase;

    class Mysql implements IDatabase
    {

        protected $conn;

        public function connect($host, $user, $password, $dbName)
        {
            $conn = mysql_connect($host, $user, $password);
            mysql_select_db($dbName);
            $this->conn = $conn;
        }

        function query($sql)
        {
            $res = mysql_query($sql, $this->conn);
            return $res;
        }

        function close()
        {
            mysql_close($this->conn);
        }

    }
