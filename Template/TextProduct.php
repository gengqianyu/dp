<?php

    class TextProduct implements Product {

        private $mfgProduct;

        //获取文字内容
        public function getProperties() {
            $this->mfgProduct = "文字容";
            return $this->mfgProduct;
        }

    }
    