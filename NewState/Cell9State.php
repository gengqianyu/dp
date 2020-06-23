<?php

    class Cell9State implements IMatrix {

        private $context;

        public function __construct(Content $contextNow) {
            $this->context = $contextNow;
        }

        public function goDown() {
            //不合法的移动
        }

        public function goLeft() {
            echo "8<br>";
            $this->context->setState($this->context->getCell8State());
        }

        public function goRight() {
            //不合法的移动
        }

        public function goUp() {
            //不合法的移动
            echo "6<br>";
            $this->context->setState($this->context->getCell6State());
        }

    }
    