<?php

    //图形产品
    class GraphicProduct implements Product
    {

        private $mfgProduct;

        public function getProperties()
        {
            $this->mfgProduct = "图片";
            return $this->mfgProduct;
        }

    }