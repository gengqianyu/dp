<?php

    namespace Factory;

    class GraphicProduct implements Product
    {
        private $mfgProduct;

        public function getProperties()
        {
            $this->mfgProduct = "This is a graphic.\r\n";
            return $this->mfgProduct;
        }

    }