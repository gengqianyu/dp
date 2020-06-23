<?php

//Maintenance(保养维护)装饰器
    namespace Decorator;

    class MaintenanceDecorator extends Decorator
    {
        public function __construct(IComponent $site)
        {
            $this->site = $site;
        }

        public function getPrice()
        {
            return 950 + $this->site->getPrice();
        }

        public function getSite()
        {
            return $this->site->getSite() . "_____Maintenance";
        }

    }