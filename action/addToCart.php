<?php
require '../controller/cartController.php';
include('../settings/core.php');



// check if theres a POST variable with the name 'adduserButton'
if (isset($_POST['addToCart'])) {
  
    // retrieve category name from the form submission
    $customer = NULL;
    if(isset($_SESSION['user_id'])){
        $customer = $_SESSION['user_id'];
    }
    $product = $_POST['product_id'];
    $ip_add = $_SERVER['REMOTE_ADDR'];
    $qty = $_POST['qty'];

    $check = select_item_in_cart_controller($product,$ip_add,$customer);
    // echo $check;
    // var_dump($check);
    if (count($check) > 0) {
        $qty = $check['qty'] + 1;
        $result = update_quantity_controller($product,$ip_add,$customer,$qty);        
    }else {
        $result = add_to_cart_controller($product,$ip_add,$customer,$qty);

    }


    if ($result === true) {
        echo '<script>alert("success")</script>';
        header('Location: ../view/cart.php');
    } else {
        echo 'error: failed to add to cart';
    }

    // call the add_user_controller function: return true or false
    
}

// check if theres a POST variable with the name 'adduserButton'
if (isset($_GET['product'])) {
  
    // retrieve category name from the form submission
    $customer = NULL;
    if(isset($_SESSION['user_id'])){
        $customer = $_SESSION['user_id'];
    }
    $product = $_GET['product'];
    $ip_add = $_SERVER['REMOTE_ADDR'];
    $qty = 1;

    $check = select_item_in_cart_controller($product,$ip_add,$customer);
    // echo $check;
    // var_dump($check);
    if (count($check) > 0) {
        $qty = $check['qty'] + 1;
        $result = update_quantity_controller($product,$ip_add,$customer,$qty);        
    }else {
        $result = add_to_cart_controller($product,$ip_add,$customer,$qty);

    }


    if ($result === true) {
        echo '<script>alert("success")</script>';
        header('Location: ../view/cart.php');
    } else {
        echo 'error: failed to add to cart';
    }

    // call the add_user_controller function: return true or false
    
}

?>