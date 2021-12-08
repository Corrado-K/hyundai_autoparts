<?php

require '../class/orderClass.php';

// order
function add_to_order_controller($cid, $invoice_no, $order_date, $order_status){
    // create an instance of the order class
    $order_instance = new Order();
    // call the method from the class
    return $order_instance->add_order($cid, $invoice_no, $order_date, $order_status);

}

function view_order_controller($cid){
    // create an instance of the order class
    $order_instance = new order();
    // call the method from the class
    return $order_instance->view_order($cid);

}

function view_payment_controller($cid){
    // create an instance of the order class
    $order_instance = new order();
    // call the method from the class
    return $order_instance->view_payment($cid);

}

?>