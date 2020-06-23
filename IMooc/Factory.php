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
     * datetime 2014-12-3 17:21:49
     */

    namespace IMooc;

    class Factory
    {

        //设计模式中的工场模式
        static function createDatabase()
        {
            $db = Database::getInstance();
            Register::set('db1', $db);
            return $db;
        }

        //选择一个db
        static function getDatabase($id = 'master')
        {
            $key = 'database_' . $id;

            $db = Register::get($key);

            if ($db) {
                return $db;
            }

            if ($id == 'slave') {
                //获取全部slave配置项
                $slaves = Application::getInstance()->config['database'][$id];
                //随机读取一个slave配置
                $db_conf = $slaves[array_rand($slaves)];
            } else {
                //获取master服务器配置
                $db_conf = Application::getInstance()->config['database'][$id];
            }
            //创建数据服务连接  并注册到注册器
            $db = new \IMooc\Database\Mysqli();
            $db->connect($db_conf['host'], $db_conf['user'], $db_conf['password'], 'test');
            Register::set($key, $db);
            return $db;

        }

        /**
         * get a user from register
         * @param $id
         * @return User
         */
        static function getUser($id)
        {
            $key = 'user_' . $id;
            $usrObj = Register::get($key);

            if (!is_object($usrObj)) {
                $usrObj = new User($id);
                Register::set($key, $usrObj);
            }

            return $usrObj;
        }

    }