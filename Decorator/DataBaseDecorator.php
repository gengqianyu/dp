<?php
    //DataBase 装饰器
    namespace Decorator;

    class DataBaseDecorator extends Decorator
    {

        public function __construct(IComponent $siteNow)
        {
            $this->site = $siteNow;
        }

        public function getPrice()
        {

            return 800 + $this->site->getPrice();
        }

        public function getSite()
        {
            return $this->site->getSite() . "_____database";
        }

    }