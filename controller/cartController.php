<?php

require '../class/cartClass.php';

// cart
function add_to_cart_controller($pid,$ip_add,$cid,$qty){
    // create an instance of the cart class
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->add_to_cart($pid,$ip_add,$cid,$qty);

}

function select_item_in_cart_controller($pid, $ip_add, $cid){
    // create an instance of the customer class
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->select_item_in_cart($pid, $ip_add, $cid);

}

function view_all_products_in_cart_controller($ip_add,$cid){
    // create an instance of the customer class
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->view_all_products_in_cart($ip_add,$cid);

}

function remove_from_cart_controller($pid,$ip_add,$cid){
    // create an instance of the customer class
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->remove_from_cart($pid,$ip_add,$cid);

}

function update_quantity_controller($pid,$ip_add,$cid,$qty){
    // create an instance of the customer class
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->update_quantity($pid,$ip_add,$cid,$qty);

}

function total_price_controller($ip_add,$cid){
    // create an instance of the customer class
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->total_price($ip_add,$cid);

}


?>