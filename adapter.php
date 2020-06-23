<?php

/* encoding UTF-8
 * author gengqianyu
 * email gengyangyang@gomeplus.com
 * datetime 2017-7-14 19:02:26
 */

interface ITarget {

    function operation1();

    function operation2();
}

interface IAdaptee {

    function operation1();
}

class Adaptee extends IAdaptee {

    public function operation1() {
        echo "原方法";
    }

}

class Adapter implements ITarget {

    private $adaptee;

    public function __construct($adaptee) {
        $this->adaptee = $adaptee;
    }

    public function operation1() {
        return $this->adaptee->operation1();
    }

    public function operation2() {
        echo "适配方法";
    }

}

class Client {

    public function test() {
        $adapter = new Adapter(new Adaptee(null));
        $adapter->operation1(); //原方法  
        $adapter->operation2(); //适配方法  
    }

}
