<?php
    //男性组件
    namespace NewDecorator;
    class Male extends IComponent
    {
        public function __construct()
        {
            $this->date = "Male";
            $this->setFeature("<br> dude programmer features:");
        }

        public function getFeature()
        {
            return $this->feature;
        }

        public function setAge($ageNow)
        {
            $this->ageGroup = $ageNow;
        }

        public function setFeature($fea)
        {
            $this->feature = $fea;
        }

        public function getAge()
        {
            return $this->ageGroup;
        }
    }