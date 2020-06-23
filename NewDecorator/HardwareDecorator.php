<?php
    //硬件装饰器
    namespace NewDecorator;

    class HardwareDecorator extends Decorator
    {
        private $hardwareNow;
        private $box = array(
            "mac" => "Macintosh",
            "dell" => "Dell",
            "hp" => "Hewlett-Packard",
            "lin" => "linux"
        );

        public function __construct(IComponent $dateNow)
        {
            $this->date = $dateNow;
        }

        public function getFeature()
        {
            $output = $this->date->getFeature();
            $format = "<br>&nbsp;&nbsp;";
            $output .= $format . " current hardware: ";
            $output .= $this->hardwareNow . "\r\n";
            return $output;
        }

        /**
         * 设置特征
         * @param $hdw
         */
        public function setFeature($hdw)
        {
            $this->hardwareNow = $this->box[$hdw];
        }
    }