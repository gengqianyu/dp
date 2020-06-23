<?php

    //钩子接口
    abstract class IHook
    {

        protected $purchased; //已购买的
        protected $hookSpecial; //钩子特殊价格
        protected $shippingHook; //运输钩子
        protected $fullCost; //总共花费

        public function templateMethod($total, $special)
        {
            $this->purchased = $total;
            $this->hookSpecial = $special;
            $this->addTax();
            $this->addShippingHook();
            $this->displayCost();
        }

        protected abstract function addTax(); //添加税金

        protected abstract function addShippingHook(); //添加运费

        protected abstract function displayCost(); //显示总花费
    }
    