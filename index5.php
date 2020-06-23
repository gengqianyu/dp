<?php

    /**
     * 代理模式
     * =====================================================================
     * 1：在客户端和实体之间建立一个代理对象（proxy），客户端对实体进行操作全部委派给代理对象，隐藏实体的具体实现细节。
     * 2：proxy还可以与业务代码分离，部署到另外的服务器，业务代码中，通过rpc来委派任务
     * =====================================================================
     * encoding UTF-8
     * author 耿乾钰;
     * link 401269150@qq.com;
     * datetime 2015-3-16 16:10:03
     */
    header("content-type:text/html;charset=utf8");
    define("BASEDIR", __DIR__);
    require_once BASEDIR . '/IMooc/Loader.php';
    spl_autoload_register("\IMooc\Loader::autoload");

    $proxy = new IMooc\Proxy();

    $proxy->getUserName($id);
    $proxy->setUserName($id, $name);