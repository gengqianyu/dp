<?php

//关状态类
    class OffState implements IState {

        private $context;

        public function __construct(Content $contextNow) {
            $this->context = $contextNow;
        }

        public function turnLightOff() {
            echo "灯已关，不会有其他操作<br>";
        }

        public function turnLightOn() {
            echo "灯打开，现在我可以看见了<br>";
            $this->context->setState($this->context->getOnState());
        }

        public function turnBrighter() {
            
        }

        public function turnBrightest() {
            
        }

    }
    