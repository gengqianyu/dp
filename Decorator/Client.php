<?php
    //网站报价的装饰器实例
    //网站有一个初始价格
    //经过装饰器层层包装 实现按需定价
    namespace Decorator;

    spl_autoload_register(function ($class_name) {
//        echo $class_name . "\r\n";
        require_once str_replace("\\", "/", "../" . $class_name) . ".php";
    });

    class Client
    {
        private $basicSite;
        private $decorators = [];

        function __construct()
        {
            //实例化basicSite组件
            $this->basicSite = new BasicSite();
            //注册装饰器 根据条件注册
            array_push($this->decorators, __NAMESPACE__ . "\MaintenanceDecorator");
            array_push($this->decorators, __NAMESPACE__ . "\VideoDecorator");
            array_push($this->decorators, __NAMESPACE__ . "\DataBaseDecorator");

            //包装basicSite组件
            $this->basicSite = $this->wrapComponent($this->basicSite);
            $site = $this->basicSite->getSite();

            $price = $this->basicSite->getPrice();
            printf("%s,total=$%d", $site, $price);
        }

        /**
         * 包装组件
         * @param IComponent $component
         * @return DataBaseDecorator|IComponent|MaintenanceDecorator|VideoDecorator
         */
        private function wrapComponent(IComponent $component)
        {
            //如果注册器不为空，则装修包装组件
            if (count($this->decorators) > 0) {
                foreach ($this->decorators as $key => $decorator) {
                    $component = new $decorator($component);
                }
            }
            return $component;
        }
    }

    new Client();