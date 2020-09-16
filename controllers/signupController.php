<?php
require_once('config/base_controller.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class SignupController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function showsignup()
  {
    $this->render('signup', []);
  }
  public function signup(){
      $user_name = $_POST['username'];//user name
      $password = $_POST['password'];//user password
      $re_password = $_POST['re_password'];// reenter password
      if($user_name == ""){
        echo json_encode(array('report' => 'Username cant empty"'));
      }else if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $user_name) ){
        echo json_encode(array('report' => 'Username cant have special char'));
      }else if($password == ""){
        echo json_encode(array('report' => 'Password cant empty'));
      }else if($re_password == ""){
        echo json_encode(array('report' => 'ReEnter password cant empty'));
      }else if($re_password != $password){
        echo json_encode(array('report' => 'ReEnter pass word must match with password'));
      }else {
          $query = $this->model('User')->GetUser($user_name);
          $user = mysqli_fetch_array($query);
          if(empty($user)){
            
              $this->model('User')->AddUser($user_name,$password);
              echo json_encode(array('report' => 'Sign up success',
                                      'route' => './index.php?controller=login&action=showlogin'));
          }
      }
  }
  
}