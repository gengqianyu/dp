<?php
    //原型模式
    namespace Prototype;

    spl_autoload_register(function ($class_name) {
        require_once str_replace("\\", "/", "../" . $class_name) . ".php";
    });

    class Client
    {
        //用于直接实例化
        private $fly1;
        private $fly2;
        //用于克隆
        private $c1fly;
        private $c2fly;
        private $updatedCloneFly;


        public function __construct()
        {
            //实例化
            $this->fly1 = new MaleProto();
            $this->fly2 = new FemaleProto();
            //克隆
            $this->c1fly = clone $this->fly1;
            $this->c2fly = clone $this->fly2;
            $this->updatedCloneFly = clone $this->fly2;
            //更新克隆
            $this->c1fly->mated = 'true';
            $this->c2fly->fecundity = '186';
            $this->updatedCloneFly->eyeColor = "purple";
            $this->updatedCloneFly->wingBeat = 220;
            $this->updatedCloneFly->fecundity = 92;
            $this->updatedCloneFly->unitEyes = 750;
            $this->showFly($this->c1fly);
            $this->showFly($this->c2fly);
            $this->showFly($this->updatedCloneFly);
        }

        private function showFly(IPrototype $fly)
        {
            echo "眼睛颜色：" . $fly->eyeColor . "<br>\r\n";
            echo "振翅次数：" . $fly->wingBeat . "<br>\r\n";
            echo "性别：" . $fly::GENDER . "<br>\r\n";

            if ($fly::GENDER == "FEMALE") {
                echo "产卵个数：" . $fly->fecundity . "<br>\r\n";
            } else {
                echo "是否交配:" . $fly->mated . "<br>\r\n";
            }
        }

    }

    new Client();