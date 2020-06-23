<?php

//处理器接口；
    abstract class Handlder {

        protected $successor;
        protected $hookup;
        protected $tableMaster;
        protected $sql;
        protected $handle;

        abstract public function handleRequest($request);

        abstract public function setSuccessor($nextService);
    }
    