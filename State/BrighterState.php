<?php

    class BrighterState implements IState {

        private $context;

        public function __construct(Content $contextNow) {
            $this->context = $contextNow;
        }

        public function turnBrighter() {
            
        }

        public function turnBrightest() {
            echo "最亮<br>";
            $this->context->setState($this->context->getBrightestState());
        }

        public function turnLightOff() {
            
        }

        public function turnLightOn() {
            
        }

    }
    