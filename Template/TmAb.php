<?php

    //模板方法参与者
    //抽象模板方法类
    abstract class TmAb
    {

        protected $pix;
        protected $cap;

        public function templateMethod()
        {
            $this->addPix();
            $this->addCaption();
        }

        //添加url信息 模板方法
        protected abstract function addPix();

        //添加图题信息 模板方法
        protected abstract function addCaption();
    }
    