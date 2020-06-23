<?php

    /*
     * To change this template, choose Tools | Templates
     * and open the template in the editor.
     */

    /**
     * Description of MaleUserStrategy
     *
     * @author 耿乾钰;
     */

    namespace IMooc;

    class MaleUserStrategy implements UserStrategy
    {

        function showAD()
        {
            echo 'iphone6';
        }

        function showCategory()
        {
            echo '电子产品';
        }

    }