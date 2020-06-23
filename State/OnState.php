<?php

//开状态类
    class OnState implements IState {

        private $context;

        public function __construct(Content $contextNow) {
            $this->context = $contextNow;
        }

        public function turnLightOff() {
            
        }

        public function turnLightOn() {
            echo "灯已经打开，不会有任何动作。<br>";
        }

        public function turnBrighter() {
            echo "更亮<br>";
            //设置状态为关
            $this->context->setState($this->context->getBrighterState());
        }

        public function turnBrightest() {
            
        }

    }
    