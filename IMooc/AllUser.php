<?php

    /**
     * 类描述
     * =====================================================================
     * 功能描述
     *
     * =====================================================================
     * encoding UTF-8
     * author 耿乾钰;
     * link 401269150@qq.com;
     * datetime 2015-3-13 15:51:19
     */

    namespace IMooc;

    class AllUser implements \Iterator
    {

        protected $ids;
        protected $data = array();
        protected $index;
        protected $db;

        function __construct()
        {
            $this->db = Factory::getDatabase();
            $res = $this->db->query("select id from user");
            //fetch_all遍历出所有资源中的结果集
            $this->ids = $res->fetch_all(MYSQLI_ASSOC);
        }

        /**
         * 获取当前一个元素 第3个运行
         * @return User|mixed
         */
        function current()
        {
            $id = $this->ids[$this->index]['id'];
            return Factory::getUser($id);
        }

        /**
         *下一个元素 第4个运行
         */
        function next()
        {
            $this->index++;
        }

        /**
         * 验证当前是否还有下一个元素  第2个运行
         * @return bool
         */
        function valid()
        {
            return $this->index < count($this->ids);
        }

        /**
         * 重置迭代器 第1个运行
         */
        function rewind()
        {
            $this->index = 0;
        }


        /**
         * 表示迭代器的位置
         * @return mixed
         */
        function key()
        {
            return $this->index;
        }

    }