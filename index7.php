<?php

    /**
     * php中使用ArrayAccess,实现配置文件的加载
     * =====================================================================
     * 功能描述
     *
     * =====================================================================
     * encoding UTF-8
     * author 耿乾钰;
     * link 401269150@qq.com;
     * datetime 2015-3-25 15:30:52
     */
    header("content-type:text/html;charset=utf8");
    define("BASEDIR", __DIR__);
    require_once BASEDIR . "/IMooc/Loader.php";
    spl_autoload_register('\IMooc\Loader::autoload');
    //$config = new IMooc\Config(BASEDIR . "/configs");
    //var_dump($config['controller']);
    //var_dump($config['database']);
    $db_conf = IMooc\Application::getInstance()->config['database'];
    var_dump($db_conf);
