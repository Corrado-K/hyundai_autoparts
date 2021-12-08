<?php
require '../controller/productController.php';

// check if theres a POST variable with the name 'adduserButton'
if (isset($_POST['addCategory'])) {
    // retrieve category name from the form submission
    $category = $_POST['categoryName'];
   
    $result = add_category_controller($category);

    if ($result === true) {
        echo '<script>alert("success")</script>';
        header('Location: ../admin/add-brand.php');
    } else {
        echo 'error: failed to add category';
    }

    // call the add_user_controller function: return true or false
    
}

?>