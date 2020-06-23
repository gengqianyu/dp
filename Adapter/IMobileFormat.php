<?php

    /**
     * 移动设备布局product模型接口
     *
     */

    namespace Adapter;

    interface IMobileFormat
    {

        public function formatCSS(); //格式化css

        public function formatGraphics(); //格式化图形

        public function verticalLayout(); //垂直布局
    }
    