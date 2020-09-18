<?php
require_once "config/connection.php";
class Game extends DB{
    public function GetGame(){
        $sql = "SELECT * FROM products where quantity > 0";
        return mysqli_query($this->conn,$sql);
    }
    public function GetSingle($user_name){
        $stmt = $this->conn->prepare("SELECT * FROM products where id= ? limit 1");
        $stmt->bind_param("s", $user_name);
        $stmt->execute();
        $user_all = $stmt->get_result();
        $stmt->close();
        return $user_all;
    }
}