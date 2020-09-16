<?php
require_once "config/connection.php";
class Admin extends DB{
    public function AddProduct($name,$price,$images,$publisher,$quantity){
        $stmt = $this->conn->prepare("INSERT INTO products (name,price,image,publisher,quantity) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sissi",$name,$price,$images,$publisher,$quantity);
        $stmt->execute();
        $stmt->close();
    }
}