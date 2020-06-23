<?php
    //原型接口
    namespace Prototype;

    abstract class IPrototype
    {

        public $eyeColor; //眼睛颜色
        public $wingBeat; //翅膀煽动次数
        public $unitEyes; //复眼个数

        abstract function __clone();
    }
    