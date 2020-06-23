<?php

    class Cell6State implements IMatrix {

        private $context;

        public function __construct(Content $contextNow) {
            $this->context = $contextNow;
        }

        public function goDown() {
            echo "9<br>";
            $this->context->setState($this->context->getCell9State());
        }

        public function goLeft() {
            echo "5<br>";
            $this->context->setState($this->context->getCell5State());
        }

        public function goRight() {
            //不合法的移动
        }

        public function goUp() {
            echo "3<br>";
            $this->context->setState($this->context->getCell3State());
        }

    }
    