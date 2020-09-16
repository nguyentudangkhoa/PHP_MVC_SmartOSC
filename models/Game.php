<?php
require_once "config/connection.php";
class Game extends DB{
    public function GetGame(){
        $sql = "SELECT * FROM products";
        return mysqli_query($this->conn,$sql);
    }
    public function GetSingle($id){
        $sql = "SELECT * FROM products where id= $id limit 1";
        return mysqli_query($this->conn,$sql);
    }
}