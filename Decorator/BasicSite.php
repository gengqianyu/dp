<?php

//    BasicSite 组件
    namespace Decorator;

    class BasicSite extends IComponent
    {

        public function __construct()
        {
            $this->site = " Basic Site";
        }

        /**
         * 获取网站报价
         * @return int
         */
        public function getPrice()
        {
            return 1200;
        }

        /**
         * 获取网站名称
         * @return string
         */
        public function getSite()
        {
            return $this->site;
        }

    }