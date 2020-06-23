<?php

    //工厂方法参与者所响应的是来自TmFac对象的请求
    //工厂接口
    abstract class Creator
    {

        protected abstract function factoryMethod();

        public function doFactory()
        {
            $mfg = $this->factoryMethod();
            return $mfg;
        }

    }