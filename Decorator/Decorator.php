<?php
//装饰器接口
    namespace Decorator;

    abstract class Decorator extends IComponent
    {
        //继承getSite和getPrice
        //这仍然是一个抽象类
        //这里不需要实现任何一个抽象方法
        //任务是维护Component的引用
//        public function getPrice() {
//
//        }
//        public function getSite() {
//            
//        }
    }