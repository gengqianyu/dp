<?php
    //首先，要解释好莱坞原则，采用模板方法模式是最合适的，这个原则中的“调用”实际上
    //是指遵循某个顺序，父类（抽象类）建立操作，并设置他们的顺序，而子类具体实现这些操作，
    //我们会建立面试，试镜，和才艺测试；你要按我们的顺序完成这些测试，
    //但是你可以采用你喜欢的方式，但不要改变这个顺序
    function __autoload($class_name)
    {
        include $class_name . '.php';
    }

    class NewClient
    {

        private $buyTotal;
        private $gpsNow;
        private $mapNow; //
        private $boatNow; //租船费
        private $special; //特殊的，运费标识
        private $zamCalc; //钩子对象

        public function __construct()
        {
            $this->setHTML();
            $this->setCost();
            $this->zamCalc = new ZambeziCalc();
            $this->zamCalc->templateMethod($this->buyTotal, $this->special);
        }

        private function setHTML()
        {
            $_POST['gps'] = 100;
            $_POST['map'] = array(
                10,
                // 50,
                // 60
            );
            $_POST['boat'] = 55;
            $this->mapNow = $_POST['map'];
            $this->gpsNow = $_POST['gps'];
            $this->boatNow = $_POST['boat'];
        }

        private function setCost()
        {
            $this->buyTotal = $this->gpsNow;
            foreach ($this->mapNow as $value) {
                $this->buyTotal += $value;
            }
            //boolean
            $this->special = ($this->buyTotal >= 200);
            $this->buyTotal += $this->boatNow;
        }

    }

    $worker = new NewClient();