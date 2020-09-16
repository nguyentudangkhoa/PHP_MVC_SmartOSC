<?php
require_once('config/base_controller.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class AdminController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function showAddProDuct()
  {
    $this->render('admin', []);
  }
  public function addProduct(){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $publisher = $_POST['publisher'];
    $quantity = $_POST['quantity'];
    if($name = ""){
      echo "Name of the game cant empty <a href='./index.php?controller=admin&action=showAddProDuct'> Go back</a>";
    }else if($price = ""){
      echo "Price of the game cant empty <a href='./index.php?controller=admin&action=showAddProDuct'> Go back</a>";
    }else if(is_numeric($price)){
      echo "Price must be a number <a href='./index.php?controller=admin&action=showAddProDuct'> Go back</a>";
    }else if($publisher = ""){
      echo "Publisher of the game cant empty <a href='./index.php?controller=admin&action=showAddProDuct'> Go back</a>";
    }else if($quantity = ""){
      echo "Quantity of the game cant empty <a href='./index.php?controller=admin&action=showAddProDuct'> Go back</a>";
    }else if(is_numeric($quantity)){
      echo "quantity must be a number <a href='./index.php?controller=admin&action=showAddProDuct'> Go back</a>";
    }else if(!$_FILES['images']['name']){
      echo "You must insert the image <a href='./index.php?controller=admin&action=showAddProDuct'> Go back</a>";
    }else{
      $uploadOk = 1;
      $dir = "public/assets/images/";
      $dir_file = $dir.basename($_FILES['images']['name']);
      $imageFileType = pathinfo($_FILES['images']['name'],PATHINFO_EXTENSION);
      $valid_extensions = array("jpg","jpeg","png");
      //Check file extension 
      if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
        $uploadOk = 0;
        echo "extension must be JPG, JPEG, PNG <a href='./index.php?controller=admin&action=showAddProDuct'> Go back</a>";
      }else{
        if(move_uploaded_file($_FILES['images']['tmp_name'],$dir_file)){
          $this->model('Admin')->AddProduct($_POST['name'],$_POST['price'],($_FILES['images']['name']),$_POST['publisher'],$_POST['quantity']);
          echo "Add product success <a href='./index.php?controller=admin&action=showAddProDuct'> Go back</a>";
        }else{
          echo "Cant add product product success <a href='./index.php?controller=admin&action=showAddProDuct'> Go back</a>";;
        }
      }
    }
  }
}