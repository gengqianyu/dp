<?php

//具体处理器2
    class Q2 extends Handlder {

//设置后继对象
        public function setSuccessor($nextService) {
            $this->successor = $nextService;
        }

        public function handleRequest($request) {
            $this->handle = "q2";
            if ($request->getService() == $this->handle) {
                $this->tableMaster = "helpdesk";
                // $this->hookup = UniversalConnect::doConnect();
                // "查询数据伪代码";
                echo "问题2结果";
            } elseif ($this->successor != NULL) {
                $this->successor->handleRequest($request);
            }
        }

    }
    