<?php
require_once('config/base_controller.php');

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
    $uploadOk = 1;
    $dir = "../public/assets/images/";
    $dir_file = $dir.basename($_FILES['images']['name']);
    $imageFileType = pathinfo($_FILES['images']['name'],PATHINFO_EXTENSION);
    $valid_extensions = array("jpg","jpeg","png");
    //Check file extension 
    if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
      $uploadOk = 0;
    }
    if($uploadOk == 0){
      echo json_encode(array('report' => 'The extension of image must be jpg, jpeg, png'));
    }else{
      if(move_uploaded_file($_FILES['images']['name'],$dir_file)){
        $this->model('Admin')->AddProduct($_POST['name'],$_POST['price'],$_FILES['images']['name'],$_POST['publisher'],$_POST['quantity']);
        echo json_encode(array('report' => 'Add product success'));
     }else{
      echo json_encode(array('report' => 'Fail to upload image'));
     }
    }
  }
}