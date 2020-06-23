<?php

//关系说明之相识关系 uml中用一个简单箭头指示。——>
//Proxy类包含RealSubject类的一个引用，也就与它建立了一个相识关系。

    class Proxy extends ISubject
    {

        private $realSubject;

        protected function request()
        {
            $this->relSubject = new RealSubject();
            $this->realSubject->request();
        }

    }

    class RealSubject
    {

        public function request()
        {
            echo '伪代码.......';
        }

    }
    