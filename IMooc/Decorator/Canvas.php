<?php

    /**
     * 画布组件
     * =====================================================================
     * 功能描述
     *
     * =====================================================================
     * encoding UTF-8
     * author 耿乾钰;
     * link 401269150@qq.com;
     * datetime 2015-3-23 16:34:24
     */

    namespace IMooc\Decorator;

    class Canvas implements IComponent
    {
        private $data;
        private $decorators = array();

        function __construct()
        {
            $this->init();
        }

        //初始化画布数组
        function init($width = 20, $height = 10)
        {
            $data = array();
            for ($i = 0; $i < $height; $i++) {
                for ($j = 0; $j < $width; $j++) {
                    $data[$i][$j] = '*';
                }
            }
            $this->data = $data;
        }

        /**
         * 注册装饰器
         * @param IComponent $decorator
         */
        function addDecorator(IComponent $decorator)
        {
            $this->decorators[] = $decorator;
        }

        //画图之前
        public function beforeDraw()
        {
            foreach ($this->decorators as $decorator) {
                $decorator->beforeDraw();
            }
        }

        //画图后
        public function afterDraw()
        {
            foreach ($this->decorators as $decorator) {
                $decorator->afterDraw();
            }
        }

        /**
         *画图
         */
        function draw()
        {
            $this->beforeDraw();

            foreach ($this->data as $line) {
                foreach ($line as $char) {
                    echo $char;
                }
                echo "\r\n";
            }

            $this->afterDraw();
        }

    }