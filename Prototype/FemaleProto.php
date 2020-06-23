<?php

    namespace Prototype;


    class FemaleProto extends IPrototype
    {

        const GENDER = "FEMALE";

        //雌果蝇的产卵数
        public $fecundity;

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
    