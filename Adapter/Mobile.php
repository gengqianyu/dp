<?php
//被适配者
    namespace Adapter;

    include_once 'IMobileFormat.php';

    class Mobile implements IMobileFormat
    {
        public function formatCSS()
        {
            echo "初始化html，格式化移动css\r\n";
        }

        public function formatGraphics()
        {
            echo "格式化图形\r\n";
        }

        public function verticalLayout()
        {
            echo "垂直布局\r\n";
        }

        public function closeHtml()
        {
            echo "关闭html标签\r\n";
        }
    }