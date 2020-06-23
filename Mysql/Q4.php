<?php

//具体处理器4
    class Q4 extends Handlder {

//设置后继对象
        public function setSuccessor($nextService) {
            $this->successor = $nextService;
        }

        public function handleRequest($request) {
            $this->handle = "q4";
            if ($request->getService() == $this->handle) {
                $this->tableMaster = "helpdesk";
                // $this->hookup = UniversalConnect::doConnect();
                // "查询数据伪代码";
                echo "问题4结果";
            } elseif ($this->successor != NULL) {
                $this->successor->handleRequest($request);
            }
        }

    }
    