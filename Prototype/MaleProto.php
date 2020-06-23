<?php

    namespace Prototype;

    class MaleProto extends IPrototype
    {

        const GENDER = "MALE";

        //果蝇交配以后此变量设置为true；
        public $mated;

        public function __construct()
        {
            $this->eyeColor = 'red';
            $this->wingBeat = '220';
            $this->unitEyes = '760';
        }

        public function __clone()
        {
            ;
        }

    }
    