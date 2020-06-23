<?php

//状态接口
    interface IState {

        public function turnLightOn();//打开
        public function turnLightOff();//关闭
        public function turnBrighter();//更亮
        public function turnBrightest();//最亮
    }
    