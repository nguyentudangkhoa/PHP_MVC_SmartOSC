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
    $product = $this->model('Game')->GetSingle($id)->fetch_array();// get product
  
    if(!isset($_SESSION['cart'])){// check exists session cart
      $_SESSION['cart'] = array(
        "items"       => array(
                                $id =>  [
                                  "quantity"  =>  1,
                                  "price"     =>  $product['price'], 
                                  "item"     =>  $product
                                ]
                              ),
        "totalQty"    =>  1,
        "totalPrice"  =>$product['price']
      );
      echo json_encode(array('report' => 'Add product to cart success!', 'total'=>$_SESSION['cart']['totalQty']));
    }else{
      if(array_key_exists($id,$_SESSION['cart']['items'])==true ){// check key exists
        $_SESSION['cart']['items'][$id]['quantity']+= 1;
        $_SESSION['cart']['items'][$id]['price']+= $product['price'];
        $_SESSION['cart']['totalQty'] += 1;
        $_SESSION['cart']['totalPrice']+= $product['price'];
        echo json_encode(array('report' => 'Add product to cart success!', 'total'=>$_SESSION['cart']['totalQty']));
      }else {
        $_SESSION['cart']['totalQty'] += 1;
        $_SESSION['cart']['totalPrice']+= $product['price'];
        array_push($_SESSION['cart']['items'],(int)$id);// push key to array
        $_SESSION['cart']['items'][(int)$id] = [
          'quantity'  =>  1,
          'price'     =>  $product['price'],
          'item'     =>  $product
        ];// add the value for the key you added before
        foreach($_SESSION['cart']['items'] as $key=>$value ){
          if(!is_array($value)){
            unset($_SESSION['cart']['items'][$key]);
          }
        }// check if the value is not an array delete it 
        
        echo json_encode(array('report' => 'Add product to cart success!', 'total'=>$_SESSION['cart']['totalQty']));
      }
    }
    
  }
  
}