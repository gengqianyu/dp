<?php

    namespace Factory;

    class TextProduct implements Product
    {
        private $msgProduct;

        public function getProperties()
        {
            $this->msgProduct = "This is text\r\n";
            return $this->msgProduct;
        }

    }