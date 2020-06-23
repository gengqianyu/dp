<?php

    //聚合关系，此关系和相识关系类似，不过关系更强硬，聚合关系表示一个聚合对象，与它的所有者有相同的生命期
    //策略设计模式中，Context类和Strategy接口之间就有一种聚合关系。
    //聚合关系用一个正菱形加一个箭头表示<>——>

    class Context
    {

        private $strategy;

        //Context类通过代码提示包含了一个Strategy接口的一个引用，
        //而不必在Context参与者类中实例化一个IStrategy实现。实例化Context类的一个实例时，
        //必须提供一个具体的具体的策略实现。
        //通过构造函数Context类已经配置有IStrategy的一个具体实现。这个关系的重要特点是要指出两个对象如何
        //构成一个聚合，另外他们要有相同的生命周期。
        public function __construct(IStrategy $strategy)
        {
            $this->strategy = $strategy;
        }

        public function algorithm($elements)
        {
            $this->strategy->algorithm($elements);
        }

    }

    interface IStrategy
    {
        public function algorithm($elements);
    }
    