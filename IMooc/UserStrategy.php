<?php

    /**
     * Description of UserStrategy
     *
     * @author 耿乾钰;
     */

    namespace IMooc;

    interface UserStrategy
    {
        //规定一个接口方法显示广告。
        function showAD();

        //显示类目一个方法
        function showCategory();
    }