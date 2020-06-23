<?php

    //具体模板方法
    class TmFac extends TmAb
    {
        // 添加字幕
        protected function addCaption()
        {
            //调用工厂方法
            $this->cap = new TextFactory();
            echo $this->cap->doFactory() . "<br>";
        }

        //添加像素
        protected function addPix()
        {
            $this->pix = new GraphicFactory();
            echo $this->pix->doFactory() . "<br>";
        }

    }
    