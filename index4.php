<?php

    /**
     * 迭代器模式
     *
     * =====================================================================
     * 在不需要了解内部实现的前提下，遍历一个聚合对象的内部元素。
     * 相比传统的编程模式，迭代器模式可以隐藏遍历元素的所需要的操作。
     *
     * =====================================================================
     * encoding UTF-8
     * author 耿乾钰;
     * link 401269150@qq.com;
     * datetime 2015-3-13 15:47:59
     */
    header("content-type:text/html;charset=utf8");
    define('BASEDIR', __DIR__);
    require_once BASEDIR . "/IMooc/Loader.php";
    spl_autoload_register('\IMooc\Loader::autoload');

    $users = new IMooc\AllUser();
    foreach ($users as $user) {
        var_dump($user);
    }
