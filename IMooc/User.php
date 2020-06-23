<?php
    //数据对象映射模式
    namespace IMooc;

    class User
    {
        public $id;
        public $name;
        public $mobile;
        public $registerTime;
        protected $db;

        function __construct($id)
        {
            $this->db = new \IMooc\Database\Mysqli();
            $this->db->connect('127.0.0.1', 'root', 'gengqianyu', 'test');
            $data = $this->db->query('select * from user where id=' . $id . ' limit 1');

            $this->id = $data['id'];
            $this->name = $data['name'];
            $this->mobile = $data['mobile'];
            $this->registerTime = $data['register_time'];
        }

        //通过析构函数实现对user的更改
        //只要调用此对象，就会更新，只不过有的更新未改变对象
        function __destruct()
        {
            $this->db = new \IMooc\Database\Mysqli();
            $this->db->connect('127.0.0.1', 'root', 'gengqianyu', 'test');

            $sql = "update user set name= '" . $this->name . "',mobile='" . $this->mobile . "',register_time='" . $this->name . "' where id=" . $this->id;
            $this->db->query($sql);
        }

    }