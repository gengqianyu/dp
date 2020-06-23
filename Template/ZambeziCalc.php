<?php

    //实现钩子
    //addTax,和displaycost方法都是标准方法，只有一个实现，不过addshipping方法的实现有所不同，其中有一个条件来确定是否增加运费，这就是钩子。
    class ZambeziCalc extends IHook
    {

        //添加税金
        protected function addTax()
        {
            $this->fullCost = $this->purchased + ($this->purchased * .07);
        }

        //添加运费
        protected function addShippingHook()
        {
            if (!$this->hookSpecial) {
                $this->fullCost += 12.95;
            };
        }

        //显示总金额
        protected function displayCost()
        {
            echo "your full cost is" . $this->fullCost;
        }

    }