<?php
require '../controller/productController.php';

// check if theres a POST variable with the name 'adduserButton'
if (isset($_POST['addBrand'])) {
    // retrieve brand name from the form submission
    $brand = $_POST['brandName'];
   
    $result = add_brand_controller($brand);

    if ($result === true) {
        echo '<script>alert("success")</script>';
        header('Location: ../admin/add-brand.php');
    } else {
        echo 'error: failed to add brand';
    }
        
    

    // call the add_user_controller function: return true or false
    
}

?>