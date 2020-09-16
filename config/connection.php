<?php
   class DB{
    public $conn;
    protected $serverName = 'localhost';
    protected $user='khoa';
    protected $password= 'Dangkhoa@1997';
    protected $dbName = 'mvc_smart';
    function __construct()
    {
        $this->conn = mysqli_connect($this->serverName,$this->user,$this->password,$this->dbName);
        mysqli_select_db($this->conn,$this->dbName);
        mysqli_query($this->conn,"SET NAMES 'utf8'");
    }
   }

?>