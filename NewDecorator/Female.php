<?php
//具体组件女性组件
    namespace NewDecorator;

    class Female extends IComponent
    {

        public function __construct()
        {
            $this->date = "Female";
            $this->setFeature("<br>girl programmer features:");
        }

        public function setAge($ageNow)
        {
            $this->ageGroup = $ageNow;
        }

        public function getAge()
        {
            return $this->ageGroup;
        }

        public function setFeature($fea)
        {
            $this->feature = $fea;
        }

        public function getFeature()
        {
            return $this->feature;
        }
    }