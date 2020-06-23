<?php

    /**
     * 加载配置文件类
     * =====================================================================
     * 功能描述
     *
     * =====================================================================
     * encoding UTF-8
     * author 耿乾钰;
     * link 401269150@qq.com;
     * datetime 2015-3-25 15:52:26
     */

    namespace IMooc;

    class Config implements \ArrayAccess
    {

        protected $path;
        protected $configs = array();

        function __construct($path)
        {
            $this->path = $path;
        }

        //获取数组
        function offsetGet($offset)
        {
            if (empty($this->configs[$offset])) {
                $configFilePath = $this->path . "/" . $offset . ".php";

                $this->configs[$offset] = require $configFilePath;
            }
            return $this->configs[$offset];
        }

        /**
         * 设置数组
         * @param mixed $offset
         * @param mixed $value
         * @throws \Exception
         */
        function offsetSet($offset, $value)
        {
            throw new \Exception('cannot write config file');
        }

        /**
         * 检查数组元素是否存在
         * @param mixed $offset
         * @return bool
         */
        function offsetExists($offset)
        {
            return isset($this->configs[$offset]);
        }

        //删除数组元素
        function offsetUnset($offset)
        {
            unset($this->configs[$offset]);
        }

    }