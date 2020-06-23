<?php

    namespace IMooc\Observer\Event;

    class ElsServer implements \IMooc\Observer\Observer
    {
        function update()
        {
            echo "更新 ElasticSearch 索引\r\n";
        }
    }