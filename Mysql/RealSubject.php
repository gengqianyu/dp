<?php

    include_once 'ISubject.php';

    class RealSubject implements ISubject {

        public function request() {
            echo "设置session，登陆成功";
        }

    }
    