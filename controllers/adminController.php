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
    $valid_extensions = array("jpg","jpeg","png");
    $imageFileType = pathinfo($_FILES['images']['name'],PATHINFO_EXTENSION);
    if( !in_array(strtolower($imageFileType),$valid_extensions) ) {// check extenstions of images
      $valid_extensions = array("csv");
      if(!in_array(strtolower($imageFileType),$valid_extensions)){
        echo "extension must be env if it doesnt a image <a href='./index.php?controller=admin&action=showAddProDuct'> Go back</a>";
      }else{
        $fileCSV= $_FILES["images"]["tmp_name"];
        $file = fopen($fileCSV, "r");
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $name = "";
            if (isset($column[0])) {
                $name = $column[0];
            }
            $price = "";
            if (isset($column[1])) {
                $price = $column[1];
            }
            $image = "";
            if (isset($column[2])) {
                $image = $column[2];
            }
            $publisher = "";
            if (isset($column[3])) {
                $publisher =  $column[3];
            }
            $quantity = "";
            if (isset($column[4])) {
                $quantity = $column[4];
            }
            $this->model('Admin')->AddProduct($name,$price,$image,$publisher,$quantity);
        }
      }
    }else{
      $name = $_POST['name'];// game name
      $price = $_POST['price'];// game price
      $publisher = $_POST['publisher'];// game publhser
      $quantity = $_POST['quantity'];// quantity
      //validate
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
        if ($_FILES["images"]["size"] > 500000) {
          echo "Sorry, your file is too large. <a href='./index.php?controller=admin&action=showAddProDuct'> Go back</a>";
          
        }// check file size
        $dir = "public/assets/images/"; //path of image
        $dir_file = $dir.basename($_FILES['images']['name']);
        $imageFileType = pathinfo($_FILES['images']['name'],PATHINFO_EXTENSION);
        $valid_extensions = array("jpg","jpeg","png");
        //Check file extension 
        
          if(move_uploaded_file($_FILES['images']['tmp_name'],$dir_file)){
            $this->model('Admin')->AddProduct($name,$price,('./public/assets/images/'.$_FILES['images']['name']),$publisher,$quantity);
            echo "Add product success <a href='./index.php?controller=admin&action=showAddProDuct'> Go back</a>";
          }else{
            echo "Cant add product product success <a href='./index.php?controller=admin&action=showAddProDuct'> Go back</a>";;
          }
      }
    }
  }
}