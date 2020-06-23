<?php

//电脑桌面布局

    namespace Adapter;

    include_once 'IFormat.php';

    class Desktop implements IFormat
    {
        /**
         * 格式化css
         */
        public function formatCSS()
        {
            echo "初始化html头，引入css文件\r\n";
        }

        /**
         * 格式化图形
         */
        public function formatGraphics()
        {
            echo "初始化图形\r\n";
        }

        /**
         * 水平布局
         */
        public function horizontalLayout()
        {
            echo "采用水平布局\r\n";
        }

        public function closeHtml()
        {
            echo "结束html标签\r\n";
        }

    }