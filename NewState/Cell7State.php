<?php

    class Cell7State implements IMatrix {

        private $context;

        public function __construct(Content $contextNow) {
            $this->context = $contextNow;
        }

        public function goDown() {
            //不合法的移动
        }

        public function goLeft() {
            //不合法的移动
        }

        public function goRight() {
            echo "8<br>";
            $this->context->setState($this->context->getCell8State());
        }

        public function goUp() {
            echo "4<br>";
            $this->context->setState($this->context->getCell4State());
        }

    }
    