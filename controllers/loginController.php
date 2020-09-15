<?php
require_once('config/base_controller.php');
class LoginController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function showlogin()
  {
    $this->render('login', []);
  }
  public function login(){
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $user = $this->model('User')->SelectUser($user_name)->fetch_array();
    if (!password_verify($password, $user['password'])) {
      echo json_encode(array('report' => 'wrong pass or user name'));
    }else{
      $_SESSION['login'] =[
        'user_name'=> $user['name'],
        'role'=> $user['role']
      ] ;
      echo json_encode(array('report' => 'Signed in','route'=>'./index.php?controller=pages&action=home'));
    }
  }
  public function logout(){
    unset($_SESSION['login']);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
}