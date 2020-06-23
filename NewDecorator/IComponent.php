<?php
    //组件接口
    namespace NewDecorator;

    abstract class IComponent
    {

        protected $date; //这表示是一个约会
        protected $ageGroup; //该组件所属的组
        protected $feature; //具体某个装饰器提供的特性。

        abstract public function setAge($ageNow);

        abstract public function getAge();

        abstract public function getFeature();

        abstract public function setFeature($fea);
    }
    