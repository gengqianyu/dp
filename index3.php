<?php

    /**
     * 观察着设计模式
     * =====================================================================
     * 功能描述
     * 观察者模式 （observer）当一个对象状态发生改变时，依赖他的全部对象会收到通知。并自动更新
     * 场景：一个事件发生后，要执行一连串的更新操作。传统的编程方式，就是在事件的代码之后直接加入逻辑，当更新逻辑增多之后，维护变的难以维护。
     *       这种方式是耦合的，侵入式的，增加新的逻辑需要更改事件的主题代码。
     *       观察者模式实现了低耦合，非侵入式的通知与更新模式
     * =====================================================================
     * encoding UTF-8
     * author 耿乾钰;
     * link 401269150@qq.com;
     * datetime 2015-3-13 9:32:24
     */
    header("content-type:text/html;charset=utf8");
    define('BASEDIR', __DIR__);
    require_once BASEDIR . "/IMooc/Loader.php";
    spl_autoload_register('\IMooc\Loader::autoload');
    //事件注册器
    $eventObject = new IMooc\Observer\Event();

    //因为每个更新都需要添加一个server，降低了耦合性
    $eventObject->addServer(new IMooc\Observer\Event\RedisServer());
    $eventObject->addServer(new IMooc\Observer\Event\ElsServer());
    //传统模式
    //$eventObject->trigger();

    //观察者模式低耦合
    $eventObject->trigger();