<?php
require_once('config/base_controller.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class PagesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function home()
  {
    
    $data = $this->model('Game')->GetGame();// get method of model Game
    $this->render('home', ['data'=>$data]);
  }
  public function single(){
    $id = $_GET['id'];
    $data = $this->model('Game')->GetSingle($id);
    $this->render('single',['data'=>mysqli_fetch_array($data)]);
  }
  public function error()
  {
    $this->render('error');
  }
}