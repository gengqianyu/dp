<?php

//情景类
    class Context {

        private $offState; //关闭状态对象
        private $onState; //打开状态对象
        private $brighterState; //更亮状态对象
        private $brightestState; //最亮状态对象
        private $currentState; //当前状态对象

        function __construct() {
            //这种实例化过程用到了一种递归，称为自引用。$this实参，这是context类自身的一个引用。
            $this->offState = new OffState($this);
            $this->onState = new OnState($this);
            $this->brighterState = new BrighterState($this);
            $this->brightestState = new BrightestState($this);
            //开始状态为off
            $this->currentState = $this->offState;
        }

//context类中的一些方法，要调用状态类中的方法，可以把这些方法想成是一个触发器，调用这些触发器，就会
//启动从当前状态到另外一个不同状态的变迁。
//调用状态方法触发器

        public function turnOffLight() {
            $this->currentState->turnLightOff();
        }

        public function turnOnLight() {
            $this->currentState->turnLightOn();
        }

        public function turnBrighterLight() {
            $this->currentState->turnBrighter();
        }

        public function turnBrightestLight() {
            $this->currentState->turnBrightest();
        }

//设置当前状态
        //指定当前状态是通过某个状态（on状态或off状态）完成的，一旦触发一个状态，这个状态就会向Context发送
        //一个消息。指示“我是当前状态”；
        public function setState(IState $state) {
            $this->currentState = $state;
        }

//获得状态


        public function getOffState() {
            return $this->offState;
        }

        public function getOnState() {
            return $this->onState;
        }

        public function getBrighterState() {
            return $this->brighterState;
        }

        public function getBrightestState() {
            return $this->brightestState;
        }

    }
    