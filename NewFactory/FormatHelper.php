<?php

    namespace NewFactory;

    class FormatHelper
    {

        private $topper;
        private $bottom;

        public function addTop()
        {
            $this->topper = "头部<br>\r\n";
            return $this->topper;
        }

        public function addBottom()
        {
            $this->bottom = "尾部<br>\r\n";
            return $this->bottom;
        }
    }