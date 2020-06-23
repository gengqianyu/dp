<?php

    /**
     * 布局product模型接口
     *
     */

    namespace Adapter;

    interface IFormat
    {

        public function formatCSS(); //格式化css

        public function formatGraphics(); //格式化图形

        public function horizontalLayout(); //水平布局
    }
    