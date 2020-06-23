<?php
    //组件接口
    namespace Decorator;

    abstract class IComponent
    {
        protected $site;

        abstract public function getSite();//获取网站

        abstract public function getPrice();//获取价格
    }

