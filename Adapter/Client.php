<?php
    //如果需要使用两个不兼容的接口，这种情况下，适配器模式最合适。适配器可以完成接口联姻。
    //可以吧适配器看做一个婚姻顾问，通过创建一个公共接口来客服双方的差异。利用这种设计模式，
    //可以促成二者合作，而避免完全重写某一部分。
    //
    namespace Adapter;

    include_once 'Mobile.php';
    include_once 'MobileAdapter.php';

    //客户端适配移动桌面
    class Client
    {
        private $mobile;
        private $mobileAdapter;

        function __construct()
        {
            $this->mobile = new Mobile();
            $this->mobileAdapter = new MobileAdapter($this->mobile);
            $this->mobileAdapter->formatCSS();
            $this->mobileAdapter->formatGraphics();
            $this->mobileAdapter->horizontalLayout();
        }
    }

    new Client();