<?php

//文本工厂
    class TextFactory extends Creator {

        protected function factoryMethod() {
            //生成产品
            $product = new TextProduct();
            return $product->getProperties();
        }

    }
    