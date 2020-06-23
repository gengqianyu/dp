<?php

    /**
     * 18-19:group1
     * 30-39:group2
     * 40-49:group3
     * 50+:group4
     * 具体组件和装饰器参与者，继承同一接口。
     * 具体装饰器继承装饰器参与者。
     * 组件调用具体装饰器实现不同功能
     */

    namespace NewDecorator;

    spl_autoload_register(function ($class_name) {
        require_once str_replace("\\", "/", "../" . $class_name) . ".php";
    });

    class Client
    {
        //组件实例
        private $hotDate;

        public function __construct()
        {
            //创建女生组件实例
            $this->hotDate = new Female();
            $this->hotDate->setAge("Age Group 4\r\n");
            echo $this->hotDate->getAge();
            //包装组件
            $this->hotDate = $this->wrapComponent($this->hotDate);
            echo $this->hotDate->getFeature();

            //男生
            $this->hotDate = new Male();
            $this->hotDate->setAge("Age Group 2\r\n");
            echo $this->hotDate->getAge();
            $this->hotDate = $this->wrapComponent($this->hotDate);
            echo $this->hotDate->getFeature();
        }

        /**
         * 包装组件
         * @param IComponent $component
         * @return Food|Hardware|IComponent|ProgramLang
         */
        public function wrapComponent(IComponent $component)
        {
            //实例化一个ProgramLang装饰器
            $component = new ProgramLangDecorator($component);
            $component->setFeature("php");
            //实例化一个Hardware装饰器
            $component = new HardwareDecorator($component);
            $component->setFeature("lin");
            //实例化一个Food装饰器
            $component = new FoodDecorator($component);
            $component->setFeature("veg");

            return $component;
        }
    }

    new Client();