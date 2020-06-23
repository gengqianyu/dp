<?php

    class Cell2State implements IMatrix
    {

        private $context;

        public function __construct(Content $contextNow)
        {
            $this->context = $contextNow;
        }

        public function goDown()
        {
            echo "5<br>";
            $this->context->setState($this->context->getCell5State());
        }

        public function goLeft()
        {
            echo "1<br>";
            $this->context->setState($this->context->getCell1State());
        }

        public function goRight()
        {
            echo "3<br>";
            $this->context->setState($this->context->getCell3State());
        }

        public function goUp()
        {
            //不合法的移动
        }

    }
    