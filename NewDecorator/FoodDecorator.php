<?php

    //食物具体装饰器
    namespace NewDecorator;

    class FoodDecorator extends Decorator
    {
        private $chowNow;
        private $snacks = array(
            "piz" => "Pizza",
            "burg" => "Burgers",
            "nacho" => "Nachos",
            "veg" => "Veggies"
        );

        public function __construct(IComponent $dateNow)
        {
            $this->date = $dateNow;
        }

        public function getFeature()
        {
            $output = $this->date->getFeature();
            $format = "<br>&nbsp;&nbsp;";
            $output .= $format . " Favorite food: ";
            $output .= $this->chowNow . "<br>\r\n";
            return $output;
        }

        public function setFeature($yum)
        {
            $this->chowNow = $this->snacks[$yum];
        }
    }