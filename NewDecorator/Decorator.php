<?php

    //装饰器参与者
    //装饰器接口
    namespace NewDecorator;

    abstract class Decorator extends IComponent
    {
        public function setAge($ageNow)
        {
            $this->ageGroup = $ageNow;
        }

        public function getAge()
        {
            return $this->ageGroup;
        }

    }