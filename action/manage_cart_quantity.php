<?php
require '../controller/cartController.php';


// check if theres a POST variable with the name 'adduserButton'
if (isset($_POST['add_qty'])) {
    
    $pid = $_POST['pid'];
    $ip_add = $_POST['ip_add'];
    $cid = $_POST['cid'];
    $qty = $_POST['qty'] + 1;

    echo "PID: ". $pid . "IP_ADD: ".  $ip_add . "CID: ".  $cid . "QTY: ".  $qty;

    $result = update_quantity_controller($pid,$ip_add,$cid,$qty);

    if ($result === true) {
        echo '<script>alert("success")</script>';
        header('Location: ../view/cart.php');
    } else {
        echo 'error: failed to update cart';
    }
        
    
}

if (isset($_POST['sub_qty'])) {
    
    $pid = $_POST['pid'];
    $ip_add = $_POST['ip_add'];
    $cid = $_POST['cid'];
    $qty = $_POST['qty'] - 1;

    echo "PID: ". $pid . "IP_ADD: ".  $ip_add . "CID: ".  $cid . "QTY: ".  $qty;

    $result = update_quantity_controller($pid,$ip_add,$cid,$qty);

    if ($result === true) {
        echo '<script>alert("success")</script>';
        header('Location: ../view/cart.php');
    } else {
        echo 'error: failed to update cart';
    }
        
    
}



?>