<?php

/**
 * 控制器配置文件
 * =====================================================================
 * 功能描述
 * 
 * =====================================================================
 * encoding UTF-8
 * author 耿乾钰;
 * link 401269150@qq.com;
 * datetime 2015-3-25 16:15:31
 */
$config = array(
    'home' => array(
        'decorator' => array(
            'IMooc\Decorator\Login',
            'IMooc\Decorator\Json',
            'IMooc\Decorator\Template'
        )
    )
);
return $config;
?>