<?php
require '../controller/productController.php';

$target_dir = '../images/product/';
$target_file = $target_dir . basename($_FILES['product_image']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// check if theres a POST variable with the name 'adduserButton'
if (isset($_POST['addProduct'])) {
    // Check if file already exists
    if (file_exists($target_file)) {
        echo 'Sorry, file already exists.';
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES['product_image']['size'] > 500000) {
        echo 'Sorry, your file is too large.';
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != 'jpg' &&
        $imageFileType != 'png' &&
        $imageFileType != 'jpeg' &&
        $imageFileType != 'gif'
    ) {
        echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo 'Sorry, your file was not uploaded.';
        // if everything is ok, try to upload file
    } else {
        if (
            move_uploaded_file(
                $_FILES['product_image']['tmp_name'],
                $target_file
            )
        ) {
            echo 'The file ' .
                htmlspecialchars(basename($_FILES['product_image']['name'])) .
                ' has been uploaded.';
        } else {
            echo 'Sorry, there was an error uploading your file.';
        }
    }

    // retrieve product name from the form submission
    $product_cat = $_POST['product_cat'];
    $product_brand = $_POST['product_brand'];
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_desc'];
    $product_image = $target_dir . basename($_FILES['product_image']['name']);
    $product_keyword = $_POST['product_keyword'];

    $result = add_product_controller(
        $product_cat,
        $product_brand,
        $product_title,
        $product_price,
        $product_description,
        $product_image,
        $product_keyword
    );

    if ($result === true) {
        echo '<script>alert("success")</script>';
        header('Location: ../admin/products.php');
    } else {
        echo 'error: failed to add product';
    }

    // call the add_user_controller function: return true or false
}

?>
