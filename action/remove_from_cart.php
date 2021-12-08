<?php
require('../settings/core.php');
require('../controller/cartController.php');


if (isset($_GET['product'])) {

    $pid = $_GET['product'];
    $ip_add = $_SERVER['REMOTE_ADDR'];


    $cid = $_SESSION['user_id'];

    $result = remove_from_cart_controller($pid,$ip_add,$cid);

    if ($result === true) {
        echo "<script type='text/javascript'>
                alert('Removed from cart');
                window.history.back();
            </script>";
    } else {
        echo "<script type='text/javascript'>
                alert('Failed to remove from cart');
                window.history.back();
            </script>";
    }
}
