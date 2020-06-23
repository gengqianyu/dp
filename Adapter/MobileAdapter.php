<?php

//适配器参与者

//为了使mobile 能遵循IFormat的规则  创建一个adapter, 让adapter帮助mobile实现IFormat接口所有约束

    namespace Adapter;

    include_once 'IFormat.php';

    class MobileAdapter implements IFormat
    {

        private $mobile;

        function __construct(IMobileFormat $mobileNew)
        {
            $this->mobile = $mobileNew;
        }

        public function formatCSS()
        {
            $this->mobile->formatCSS();
        }

        public function formatGraphics()
        {
            $this->mobile->formatGraphics();
        }

        public function horizontalLayout()
        {
            $this->mobile->verticalLayout();
        }

    }