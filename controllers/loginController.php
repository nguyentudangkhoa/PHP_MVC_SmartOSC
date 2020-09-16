<?php
require_once('config/base_controller.php');
ini_set('display_errors', 1);//Show error of code
ini_set('display_startup_errors', 1);//Show error of code
error_reporting(E_ALL);//Show error of code
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
    $user_name = $_POST['username'];//user name
    $password = $_POST['password'];// password
    $user = $this->model('User')->SelectUser($user_name)->fetch_array();
    if (!password_verify($password, $user['password'])) {//check password is valid
      echo json_encode(array('report' => 'wrong pass or user name'));
    }else{
      $_SESSION['login'] =[
        'user_name'=> $user['name'],
        'role'=> $user['role']
      ] ;// session login after login
      echo json_encode(array('report' => 'Signed in','route'=>'./index.php?controller=pages&action=home'));//send data to ajax
    }
  }
  public function logout(){
    unset($_SESSION['login']);// end session
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
}