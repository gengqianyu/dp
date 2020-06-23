<?php

    /**
     * 颜色装饰器类
     * =====================================================================
     * 功能描述
     *
     * =====================================================================
     * encoding UTF-8
     * author 耿乾钰;
     * link 401269150@qq.com;
     * datetime 2015-3-23 17:26:10
     */

    namespace IMooc\Decorator;

    class ColorDecorator extends DrawDecorator
    {
        function beforeDraw()
        {
            echo "<div style='color:red'>\r\n";
        }

        function afterDraw()
        {
            echo "<div/>\r\n";
        }

    }
