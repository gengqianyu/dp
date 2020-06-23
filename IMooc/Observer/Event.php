<?php

    /**
     * 观察者模式 调用层
     * =====================================================================
     * 功能描述
     *
     * =====================================================================
     * encoding UTF-8
     * author 耿乾钰;
     * link 401269150@qq.com;
     * datetime 2015-3-13 10:59:57
     */

    namespace IMooc\Observer;

    class Event extends EventGenerator
    {

        //事件触发 传统模式更新
//        function trigger()
//        {
//            echo 'event<br>';
//            echo 'update1<br>';
//            echo 'update2<br>';
//            echo '.......<br>';
//            echo 'updated';
//        }

        /**
         * 事件触发通知
         */
        function trigger()
        {
            $this->notify();
        }

    }