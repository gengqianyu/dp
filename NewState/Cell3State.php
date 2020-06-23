<?php

    class Cell3State implements IMatrix {

        private $context;

        public function __construct(Content $contextNow) {
            $this->context = $contextNow;
        }

        public function goDown() {
            echo "6<br>";
            $this->context->setState($this->context->getCell6State());
        }

        public function goLeft() {
            echo "2<br>";
            $this->context->setState($this->context->getCell2State());
        }

        public function goRight() {
            //不合法的移动
        }

        public function goUp() {
            //不合法的移动
        }

    }
    