<?php

    class Cell5State implements IMatrix
    {

        private $context;

        public function __construct(Content $contextNow)
        {
            $this->context = $contextNow;
        }

        public function goDown()
        {
            echo "8<br>";
            $this->context->setState($this->context->getCell8State());
        }

        public function goLeft()
        {
            echo "4<br>";
            $this->context->setState($this->context->getCell4State());
        }

        public function goRight()
        {
            echo "6<br>";
            $this->context->setState($this->context->getCell6State());
        }

        public function goUp()
        {
            echo "2<br>";
            $this->context->setState($this->context->getCell2State());
        }
    }