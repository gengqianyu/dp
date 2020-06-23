<?php

    //程序语言装饰器

    namespace NewDecorator;

    class ProgramLangDecorator extends Decorator
    {
        private $languageNow;

        public function __construct(IComponent $dateNow)
        {
            $this->date = $dateNow;
        }

        private $language = array(
            "php" => "php",
            "cs" => "c#",
            "js" => "javascript"
        );

        public function getFeature()
        {
            $output = $this->date->getFeature();
            $format = "<br>&nbsp;&nbsp;";
            $output .= "$format Preferred programming language: ";
            $output .= $this->languageNow . "\r\n";
            return $output;
        }

        public function setFeature($lan)
        {
            $this->languageNow = $this->language[$lan];
        }
    }