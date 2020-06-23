<?php

    /**
     * 观察者模式需要更新的每个成员
     * =====================================================================
     * 功能描述
     *
     * =====================================================================
     * encoding UTF-8
     * author 耿乾钰;
     * link 401269150@qq.com;
     * datetime 2015-3-13 10:54:00
     */

    namespace IMooc\Observer\Event;

    class RedisServer implements \IMooc\Observer\Observer
    {
        function update()
        {
            echo "更新redis缓存<br>\r\n";
        }
    }