<?php

    header("content-type:text/html;charset=utf-8");
    //定义当前路径常量
    define('BASEDIR', __DIR__);
    require_once BASEDIR . '/IMooc/Loader.php';
    //注册自动加载自定义函数
    spl_autoload_register('\IMooc\Loader::autoload');

    //$db=new \IMooc\Database\Mysql();
    //$db->connect('127.0.0.1', 'root', 'root','mc');
    //$db->query('show databases');
    //$db->close();

    //数据对象映射模式加+工厂模式+注册器模式；


    class page
    {
        private $user;

        function __construct()
        {
            $this->user = IMooc\Factory::getUser(1);
        }

        function index()
        {
            $this->user->mobile = '15830192239';
            $this->test();
        }

        function test()
        {
            $this->user->registerTime = date("y-m-d h:i:s");
            var_dump($this->user);
        }
    }

    $page = new page;
    $page->index();
