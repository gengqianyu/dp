<?php

    class Cell1State implements IMatrix
    {

        private $context;

        public function __construct(Content $contextNow)
        {
            $this->context = $contextNow;
        }

        public function goDown()
        {
            echo "4<br>";
            $this->context->setState($this->context->getCell4State());
        }

        public function goLeft()
        {
            //不合法的移动
        }

        public function goRight()
        {
            echo "2<br>";
            $this->context->setState($this->context->getCell2State());
        }

        public function goUp()
        {
            //不合法的移动
        }

    }