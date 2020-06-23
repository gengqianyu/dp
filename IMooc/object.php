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
 * datetime 2014-12-2 14:19:29
 */

namespace IMooc;

class object {

    protected $array = array();

    function __construct() {
        
    }

    function __set($key, $value) {//如果对象调用属性不存在会自动交给set处理 可以用$obj->title='hello'方法定义一个类的属性
        $this->array[$key] = $value;
    }

    function __get($key) {//获取对象一个未定义的属性
        return $this->array[$key];
    }

    function __call($func, $param) {//调用一个不存在方法时，会自动调用call，第一个参数接到为调用不存在方法名，第二个参数会是该方法参数组成的一个数组。
        var_dump($func);

        var_dump($param);
    }

    static function __callstatic($func, $param) {//调用一个不存在的静态方法
        var_dump($func);

        var_dump($param);
        echo 'static';
    }

    function __tostring() {//php里当把一个对象当成一个字符串调用时，调用这个函数 比如echo 一个对象
        return __CLASS__;
    }

    function __invoke($proam) {//php里当把一个对象当成一个函数去调用时，回调这个函数 
        var_dump($proam);
    }

    static function test() {
        echo __METHOD__;
    }

}

?>
