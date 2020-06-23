<?php

    class Cell4State implements IMatrix {

        private $context;

        public function __construct(Content $contextNow) {
            $this->context = $contextNow;
        }

        public function goDown() {
            echo "7<br>";
            $this->context->setState($this->context->getCell7State());
        }

        public function goLeft() {
            //不合法的移动
        }

        public function goRight() {
            echo "5<br>";
            $this->context->setState($this->context->getCell5State());
        }

        public function goUp() {
            echo "1<br>";
            $this->context->setState($this->context->getCell1State());
        }

    }
    