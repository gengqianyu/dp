<?php

/**
 * 适配器模式中接口规则类
 * =====================================================================
 * 1适配器模式，可以将截然不同的函数接口封装成统一的api
 * 2实际应用实例，php的数据库操作有mysql，mysqli，pdo 3种，可以用适配器模式统一成一致，类似的场景还有cache适配器。
 *  将memcache，redis，file，apc等不同的缓存函数，统一成一致
 * =====================================================================
 * encoding UTF-8
 * author 耿乾钰;
 * link 401269150@qq.com;
 * datetime 2015-1-30 19:20:53
 */

namespace IMooc;

//定义一个接口
interface IDatabase {

    //连接数据库
    function connect($host, $user, $passwd, $dbname);

    function query($sql);

    function close();
}

?>
