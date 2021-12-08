<?php
require '../controller/orderController.php';
include '../settings/core.php';


// check if theres a POST variable with the name 'adduserButton'
if (isset($_POST['addOrder'])) {
    // retrieve category name from the form submission
    if (!isset($_SESSION['user_id'])) {
        check_login();
    }else{
        $cid = $_SESSION['user_id'];
        $invoice_no = rand(10000, 100000);
        $order_date = date("y-m-d");
        $order_status = "unpaid";
    }

    echo $cid . $invoice_no . $order_status;
   
    $result = add_to_order_controller($cid, $invoice_no, $order_date, $order_status);

    if ($result === true) {
        echo '<script>alert("success")</script>';
        header('Location: ../view/checkout.php');
    } else {
        echo 'error: failed to add category';
    }

    // call the add_user_controller function: return true or false
    
}

if (isset($_POST[''])) {
    
    $order_id = '';
    $product_id = '';
    $qty = '';

    $result = add_order_detail();
    
}

?>