<?php

    class Cell8State implements IMatrix {

        private $context;

        public function __construct(Content $contextNow) {
            $this->context = $contextNow;
        }

        public function goDown() {
            //不合法的移动
        }

        public function goLeft() {
            echo "7<br>";
            $this->context->setState($this->context->getCell7State());
        }

        public function goRight() {
            echo "9<br>";
            $this->context->setState($this->context->getCell9State());
        }

        public function goUp() {
            echo "5<br>";
            $this->context->setState($this->context->getCell5State());
        }

    }
    