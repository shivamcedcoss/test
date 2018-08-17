<?php
session_start();

include 'config.php';

$id = $_POST["pid"];
$action = $_POST["action"];


    if(isset($_SESSION['sessionCart']))
    {
        $sessionCart=$_SESSION['sessionCart'];

    }
    else
    {
        $sessionCart=array();
    }




switch ($action){
    case 'remove' : 
       $newCart = remove($sessionCart,$id);
        $sessionCart = $newCart;
        break;

    case 'add' :
        $cart = addProduct($sessionCart, $id);
        $sessionCart = $cart;
        break;

    default:
        # code...
        break;
    
}



function addProduct($sessionCart, $id){
    $temp;

    foreach (getProducts() as $key => $val) {

        if($id == $val["id"])
        {
          
          $temp=$val;
          $temp["quant"]="1";
        
         }
    }



    if(check($id)==true)
    {
       foreach ($GLOBALS['sessionCart'] as $key => $val) {

            if( $id ==$val["id"])
            {

                
                $sessionCart[$key]["quant"]+=1;

            }

        }
        //array_push($sessionCart,$temp);
        $_SESSION['sessionCart']=$sessionCart;
        //echo json_encode($sessionCart);    
                
    }
    else
    {

        array_push($sessionCart,$temp);
        $_SESSION['sessionCart']=$sessionCart;
         
        //echo json_encode($sessionCart);
        //echo json_encode($_SESSION["sessionCart"]);

    }
    return $sessionCart;
    
}
$_SESSION['sessionCart']=$sessionCart;
echo json_encode($sessionCart);

function remove($data, $id){
    //$newCart = array();
    foreach ($data as $key => $val) 
   {
     if($id==$val["id"])
     {
       unset($data[$key]);
     }
 }
 $data=array_values($data);
    return $data;
}

/*
function deleteproduct($pid,$cart)
{

foreach ($cart as $key => $val) 
   {
     if($pid==$val["id"])
     {
       unset($cart[$key]);
     }
 }
 $cart=array_values($cart);
 return $cart;
}*/



function check($id){
    $a = false;
    foreach ($GLOBALS['sessionCart'] as $key => $value) {
        if($id == $value['id'])
        {
            $a = true;
        }
    }
    return $a;
}



?> 


