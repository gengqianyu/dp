<?php

    namespace NewFactory;

    abstract class Creator
    {
        protected abstract function factoryMethod(Product $product);

        public function doFactory(Product $product)
        {
            $countryProduct = $product;
            return $this->factoryMethod($countryProduct);
        }
    }