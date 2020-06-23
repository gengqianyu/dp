<?php

    /**
     * 代理
     * =====================================================================
     * 功能描述
     *
     * =====================================================================
     * encoding UTF-8
     * author 耿乾钰;
     * link 401269150@qq.com;
     * datetime 2015-3-16 16:22:38
     */

    namespace IMooc;

    class Proxy implements IUserProxy
    {

        function getUserName($id)
        {
            $db = Factory::getDatabase('slave');
            $db->query('select * from user where id=' . $id);
        }

        function setUserName($id, $name)
        {
            $db = Factory::getDatabase('master');
            $db->query("update user set name=" . $name . " where id=" . $id);
        }

    }