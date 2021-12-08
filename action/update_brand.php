<?php
require '../controller/productController.php';

// check if theres a POST variable with the name 'adduserButton'
if (isset($_POST['editBrand'])) {
    // retrieve brand name from the form submission
    $id = $_POST['id'];
    $brand = $_POST['brandname'];
   
    $result = update_brand_controller($id, $brand);

    if ($result === true) {
        echo '<script>alert("success")</script>';
        header('Location: ../admin/brand.php');
    } else {
        echo 'error: failed to add brand';
    }
        
    

    // call the add_user_controller function: return true or false
    
}

?>