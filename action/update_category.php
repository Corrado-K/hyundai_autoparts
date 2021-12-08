<?php
require '../controller/productController.php';

// check if theres a POST variable with the name 'adduserButton'
if (isset($_POST['editcategory'])) {
    // retrieve category name from the form submission
    $id = $_POST['id'];
    $category = $_POST['categoryname'];
   
    $result = update_category_controller($id, $category);

    if ($result === true) {
        echo '<script>alert("success")</script>';
        header('Location: ../admin/category.php');
    } else {
        echo 'error: failed to add category';
    }
        
    

    // call the add_user_controller function: return true or false
    
}

?>