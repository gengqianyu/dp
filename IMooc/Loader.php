<?php
    //自动加载

    namespace IMooc;

    final  class Loader
    {
        static function autoload($class)
        {
            //把命名空间名映射成文件路径
            require BASEDIR . "/" . str_replace("\\", "/", $class) . '.php';
        }
    }
