<?php
require_once "config/connection.php";
class User extends DB{
    public function GetUser($user_name){
        $sql = "SELECT * FROM users WHERE name = '$user_name' LIMIT 1";
        return mysqli_query($this->conn,$sql);
    }
    public function AddUser($user_name,$password){
        $password_hash = password_hash($password,PASSWORD_DEFAULT);
        $stmt = $this->conn->prepare("INSERT INTO users (name,password) VALUES (?,?)");
        $stmt->bind_param("ss",$user_name,$password_hash);
        $stmt->execute();
        $stmt->close();
    }
    public function SelectUser($user_name){
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE name = ? ");
        $stmt->bind_param("s", $user_name);
        $stmt->execute();
        $user_all = $stmt->get_result();
        $stmt->close();
        return $user_all;
    }
}