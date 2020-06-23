<?php

    namespace NewFactory;

    class China implements Product
    {
        private $mfgProduct;
        private $formatHelper;

        public function getProperties()
        {
            $this->formatHelper = new FormatHelper();
            $this->mfgProduct = $this->formatHelper->addTop();
            $this->mfgProduct .= "中国<br>\r\n";
            $this->mfgProduct .= $this->formatHelper->addBottom();
            return $this->mfgProduct;
        }

    }