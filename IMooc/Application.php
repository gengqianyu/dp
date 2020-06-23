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
     * datetime 2015-3-25 17:33:13
     */

    namespace IMooc;

    class Application
    {

        public $config;
        static $instance;

        function __construct()
        {
            $this->config = new Config(BASEDIR . "/configs");
        }

        /**
         * 单例模式 获取实例
         * @return Application
         */
        static function getInstance()
        {
            if (self::$instance) {
                return self::$instance;
            }

            self::$instance = new self();
            return self::$instance;
        }

    }