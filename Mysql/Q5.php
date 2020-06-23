<?php

//具体处理器5
    class Q5 extends Handlder {

//设置后继对象
        public function setSuccessor($nextService) {
            $this->successor = $nextService;
        }

        public function handleRequest($request) {
            $this->handle = "q5";
            if ($request->getService() == $this->handle) {
                $this->tableMaster = "helpdesk";
                // $this->hookup = UniversalConnect::doConnect();
                // "查询数据伪代码";
                echo "问题5结果";
            } elseif ($this->successor != NULL) {
                $this->successor->handleRequest($request);
            } else {
                echo "无法处理";
            }
        }

    }
    