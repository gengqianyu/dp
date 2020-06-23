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
     * datetime 2015-1-29 14:32:08
     */

    namespace IMooc\Database;

    use IMooc\IDatabase;

    class Mysqli implements IDatabase
    {
        protected $conn;

        function connect($host, $user, $password, $dbName)
        {
            $this->conn = mysqli_connect($host, $user, $password, $dbName);
        }

        function query($sql)
        {
            $res = mysqli_query($this->conn, $sql);

            $data = $res->fetch_assoc();
            $res->free();
            return $data;
        }

        function close()
        {
            mysqli_close($this->conn);
        }

    }
