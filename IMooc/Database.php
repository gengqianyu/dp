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
     * datetime 2014-12-2 15:45:41
     */

    namespace IMooc;

    class  Database
    {

        static protected $instance;

        //如果构造函数设置成私有则改类就不能被外部new
        private function __construct()
        {
        }

        //设计模式的单例模式 避免数据库连接重复创建
        static function getInstance()
        {
            if (self::$instance) {
                return self::$instance;
            }
            self::$instance = new self();
            return self::$instance;
        }

        function where($where)
        {
            return $this;
        }

        function order($where)
        {
            return $this;
        }

        function limit($where)
        {
            return $this;
        }
    }