<?php

    namespace Factory;

    class GraphicFactory extends Creator
    {

        protected function factoryMethod()
        {
            $product = new GraphicProduct();
            return $product->getProperties();
        }

    }