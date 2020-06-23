<?php

    class BrightestState implements IState {

        private $context;

        public function __construct(Content $contextNow) {
            $this->context = $contextNow;
        }

        public function turnBrighter() {
            
        }

        public function turnBrightest() {
            
        }

        public function turnLightOff() {
            echo '关闭<br>';
            $this->context->setState($this->context->getOffState());
        }

        public function turnLightOn() {
            
        }

    }
    