<?php
    //Video 装饰器
    namespace Decorator;

    class VideoDecorator extends Decorator
    {

        public function __construct(IComponent $site)
        {
            $this->site = $site;
        }

        public function getSite()
        {
            return $this->site->getSite() . "________video";
        }

        public function getPrice()
        {
            return 350 + $this->site->getPrice();
        }

    }