<?php

    /**
     * 策略模式
     * =====================================================================
     * 1策略模式，将一组特定的行为和算法封装成类，以适应某些特定的上下文环境，这种模式就是策略模式。
     * 2实际应用中举例，假如一个电商网站系统，针对男性和女性用户要各自跳转到不同的商品类目，并且所有广告位展示不同的广告。
     * 3使用策略模式可以实现Ioc，依赖倒置，控制翻转。
     * 下面的page其实是依赖FemaleUserStrategy的，通过接口的设置，策略上的解耦。page里就不用去实现FemaleUserStrateg里的功能了。
     * =====================================================================
     * encoding UTF-8
     * author 耿乾钰;
     * link 401269150@qq.com;
     * datetime 2014-12-2 14:13:09
     */
    header("content-type:text/html;charset=utf8");
    define("BASEDIR", __DIR__);
    require BASEDIR . "/IMooc/Loader.php";
    spl_autoload_register('\IMooc\Loader::autoload');

    //IMooc\object::test();
    //exit();
    //App\Controller\Home\Index::test();
    //$db=new IMooc\Database();
    //$db->where($where)->order($order)->limit($order)
    //$obj=new IMooc\object();
    //$obj->title="hello";
    //echo $obj->title;
    //$obj->test('name',"age");
    //IMooc\object::test('name','age')
    //echo $obj('123');
    //$db = IMooc\Database::getInstance();
    //$db = IMooc\Database::getInstance();
    //$db = IMooc\Database::getInstance();
    //$db = IMooc\Factory::createDatabase();
    //其他地方调用对象
    //$db = \IMooc\Register::get('db1');

    //策略模式
    class Site
    {

        protected $strategy;

        function index()
        {
            echo 'AD:';
            echo $this->strategy->showAD();
            echo '<br/>';
            echo 'category:';
            echo $this->strategy->showCategory();
        }

        /**
         * 定义一个对外暴露的策略方法。约定是接口
         * @param \IMooc\UserStrategy $strategy
         */
        function setStrategy(\IMooc\UserStrategy $strategy)
        {
            $this->strategy = $strategy;
        }

    }

    $page = new Site;
    //根据不同参数获取不同策略
    if (isset($_GET['female'])) {
        $strategy = new \IMooc\FemaleUserStrategy();
    } else {
        $strategy = new \IMooc\MaleUserStrategy();
    }
    //设置策略
    $page->setStrategy($strategy);
    //实现策略功能
    $page->index();