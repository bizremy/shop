<?php
class Model{


    public static $mysqli=null;
    private $_db;
   /* const HOST="mysql.hostinger.com.ua";
    const USER="u344881011_1";
    const PASSWORD="qKZ5CXkTip";
    const DB="u344881011_1";*/
    const HOST="127.0.0.1";
    const USER="root";
    const PASSWORD="";
    const DB="shop";

    public function __construct()
    {
        $mysqli= new mysqli(self::HOST,self::USER,self::PASSWORD,self::DB);
        if (!$mysqli->connect_error) {
            $this->_db = $mysqli;
            $this->_db->query("set names 'UTF8'");
            return $this->_db;
        } else {
            exit("no connect to server");
        }
    }
    public static function getObj()
    {
        if(self::$mysqli==null)
        {
            $obj= new Model();
            self::$mysqli=$obj->_db;
        }
        return self::$mysqli;
    }

    public function getData()
    {

    }
    public function  getMenu()
    {
    }


}


