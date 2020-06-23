<?php


    /**
     * Description of FemaleUserStrategy
     * @author 耿乾钰;
     */

    namespace IMooc;

    class FemaleUserStrategy implements UserStrategy
    {

        function showAD()
        {
            echo "2014款女装";
        }

        function showCategory()
        {
            echo '女装';
        }

    }