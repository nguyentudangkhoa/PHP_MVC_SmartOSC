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

  public function showCart()
  {
    if(isset($_SESSION['cart'])){
      $this->render('cart', ['carts' => $_SESSION['cart']]);
    }else{
      $this->render('error', []);
    }
    
  }
  public function addToCart(){
    $id = $_POST['id'];
    $product = $this->model('Game')->GetSingle($id)->fetch_array();
  
    if(!isset($_SESSION['cart'])){
      $_SESSION['cart'] = array(
        "items"       => array(
                                $id =>  array(
                                  "quantity"  =>  1,
                                  "price"     =>  $product['price'], 
                                  "item"     =>  $product
                                )
                              ),
        "totalQty"    =>  1,
        "totalPrice"  =>$product['price']
      );
      echo json_encode(array('report' => 'Add product to cart success!', 'total'=>$_SESSION['cart']['totalQty']));
    }else{
      if(array_key_exists($id,$_SESSION['cart']['items'])==true ){
        $_SESSION['cart']['items'][$id]['quantity'] += 1;
        $_SESSION['cart']['items'][$id]['price'] += $product['price'];
        $_SESSION['cart']['totalQty'] += 1;
        $_SESSION['cart']['totalPrice']+= $product['price'];
        echo json_encode(array('report' => 'Add product to cart success!', 'total'=>$_SESSION['cart']['totalQty']));
      }else {
        $_SESSION['cart']['totalQty'] += 1;
        $_SESSION['cart']['totalPrice']+= $product['price'];
        $item = array(
                  $id => array(
                    'quantity'  =>  1,
                    'price'     =>  $product['price'],
                    'item'     =>  $product
                  )
                );
        array_push($_SESSION['cart']['items'],$item);
        echo json_encode(array('report' => 'Add product to cart success!', 'total'=>$_SESSION['cart']['totalQty']));
      }
    }
    
  }
  
}