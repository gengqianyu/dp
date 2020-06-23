<?php

    //组件接口
    namespace IMooc\Decorator;

    interface IComponent
    {
        function beforeDraw();

        function afterDraw();
    }