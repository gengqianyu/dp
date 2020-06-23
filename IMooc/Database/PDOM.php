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
 * datetime 2015-1-29 14:33:14
 */

namespace IMooc\Database;

use IMooc\IDatabase;

class PDOM implements IDatabase {

    protected $conn;

    function connect($host, $user, $passwd, $dbname) {
        $pdo = new \PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
        $this->conn = $pdo;
    }

    function query($sql) {
        return $this->conn->query($sql);
    }

    function close() {
        unset($this->conn);
    }

}

?>
