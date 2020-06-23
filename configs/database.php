<?php

/**
 * 数据库配置文件
 * =====================================================================
 * 功能描述
 * 
 * =====================================================================
 * encoding UTF-8
 * author 耿乾钰;
 * link 401269150@qq.com;
 * datetime 2015-3-25 16:15:45
 */
$config = array(
    'master' => array(
        'type' => 'MySQL',
        'host' => '127.0.0.1',
        'user' => 'root',
        'password' => 'gengqianyu',
        'dbname' => 'test'
    ),
    'slave' => array(
        'slave1' => array(
            'type' => 'MySQL',
            'host' => '127.0.0.1',
            'user' => 'root',
            'password' => 'gengqianyu',
            'dbname' => 'test'
        ),
        'slave2' => array(
            'type' => 'MySQL',
            'host' => '127.0.0.1',
            'user' => 'root',
            'password' => 'gengqianyu',
            'dbname' => 'test'
        )
    )
);
return $config;
?>
