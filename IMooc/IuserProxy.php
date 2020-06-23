<?php
    //用户代理接口
    namespace IMooc;

    interface IUserProxy
    {

        function getUserName($id);

        function setUserName($id, $name);
    }
