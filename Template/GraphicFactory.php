<?php

//图形工厂
    class GraphicFactory extends Creator
    {

        protected function factoryMethod()
        {
            $product = new GraphicProduct();
            return ($product->getProperties());
        }

    }
    