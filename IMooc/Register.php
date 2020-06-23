<?php

    /**
     *  设计模式中的注册器
     * =====================================================================
     * 功能描述
     *
     * =====================================================================
     * encoding UTF-8
     * author 耿乾钰;
     * link 401269150@qq.com;
     * datetime 2014-12-3 17:45:56
     */

    namespace IMooc;

    class Register
    {
        protected static $object;

        //设置注册器
        static function set($alias, $object)
        {
            self::$object[$alias] = $object;
        }

        //获取注册对象
        static function get($alias)
        {
            return self::$object[$alias];
        }

        //删除注册对象
        static function _unset($alias)
        {
            unset(self::$object[$alias]);
        }

    }