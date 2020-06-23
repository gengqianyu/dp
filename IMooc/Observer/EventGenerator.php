<?php

    /**
     * 观察者添加执行类
     * =====================================================================
     * 功能描述
     *
     * =====================================================================
     * encoding UTF-8
     * author 耿乾钰;
     * link 401269150@qq.com;
     * datetime 2015-3-13 10:32:28
     */

    namespace IMooc\Observer;

    abstract class EventGenerator
    {

        private $observers = array();

        /**
         * 添加observer
         * @param Observer $object
         */
        function addServer(Observer $object)
        {
            $this->observers[] = $object;
        }

        /**
         *通知更新
         */
        protected function notify()
        {
            foreach ($this->observers as $observer) {
                $observer->update();
            }
        }

    }