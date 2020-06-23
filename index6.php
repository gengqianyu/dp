<?php

    /**
     * 装饰器模式（Decorator）,可以动态地添加修改类的功能
     * =====================================================================
     * 1装饰器模式（Decorator）,可以动态地添加修改类的功能
     * 2一个类提供一项功能。如果要在修改并添加额外的功能，传统的编程模式，需要写一个子类继承它，并重新实现类的方法。
     * 3使用装饰器模式，仅需在运行时添加一个装饰器对象即可实现，可以实现最大的灵活性
     * =====================================================================
     * encoding UTF-8
     * author 耿乾钰;
     * link 401269150@qq.com;
     * datetime 2015-3-23 16:01:55
     */
    header("content-type:text/html;charset=utf8");
    define('BASEDIR', __DIR__);
    require_once BASEDIR . '/IMooc/Loader.php';
    spl_autoload_register("\IMooc\Loader::autoload");

    $canvas = new IMooc\Decorator\Canvas();
    //使用装饰器添加修改类功能 添加装饰器 结合Decorator目录下的运用
    $canvas->addDecorator(new IMooc\Decorator\ColorDecorator());
    $canvas->draw();

    //传统方式实现添加修改类功能
    //class Cavans2 extends IMooc\Canvas {
    //
    //    function draw() {
    //        echo "<div style='color:red'>";
    //        parent::draw();
    //        echo '<div/>';
    //    }
    //
    //}
    //
    //$canvas2=new Cavans2();
    //$canvas2->draw();

