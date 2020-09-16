<?php
require_once('config/base_controller.php');
ini_set('display_errors', 1);//Show error of code
ini_set('display_startup_errors', 1);//Show error of code
error_reporting(E_ALL);//Show error of code
class CartController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function showlogin()
  {
    $this->render('login', []);
  }
  
}