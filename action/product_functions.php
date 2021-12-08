<?php

if (isset($_POST['searchButton'])) {
    // retrieve the email and password from the form submission
    $keyword = $_POST['keyword'];

    // call the add_user_controller function: return true or false
    $result = select_one_product_on_keyword($keyword);

}

?>