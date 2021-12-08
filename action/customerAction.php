<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

require '../controller/customerController.php';



session_start();

// check if theres a POST variable with the name 'adduserButton'
if (isset($_POST['addUserButton'])) {
    // retrieve the name, email and password from the form submission
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $confirm_password = md5($_POST['confirm_password']);
    $country = $_POST['country'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $image = NULL;




    $result = add_customer_controller($name, $email, $pass, $country, $city, $contact, $image);

    if ($result === true) {
        echo 'success';
        header('Location: ../login/login.php');
    } else {
        echo 'error: duplicate email';
    }
        
    

    // call the add_user_controller function: return true or false
    
}

// check if theres a POST variable with the name 'loginButton'
if (isset($_POST['loginButton'])) {
    // retrieve the email and password from the form submission
    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    // call the add_user_controller function: return true or false
    $result = login_customer_controller($email, $pass);

    if (
        $result['customer_email'] == $email &&
        $result['customer_pass'] == $pass && 
        $result['user_role'] == 1) 
     {
            # head to admin page
            # for now, echo admin
            $_SESSION['user_id'] = $result['customer_id'];
            $_SESSION['email'] = $result['customer_email'];
            $_SESSION['role'] = $result['user_role'];

            header('Location: ../admin/index.php');
    }else if (
        $result['customer_pass'] == $pass && 
        $result['customer_email'] == $email &&
        $result['user_role'] == 0) 
    {
        
        echo 'success';
        $_SESSION['user_id'] = $result['customer_id'];
        $_SESSION['email'] = $result['customer_email'];
        $_SESSION['role '] = $result['user_role'];
        header('Location: ../index.php');
    }else {
        echo "<script>
          swal('Error! Login failed')
          </script>";
        //   header('Location: ../login/login.php');
        // echo 'login failed';
        $_SESSION['log'] = 0;
    }
}


if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user_id']);
    header('location: ../index.php');
}

if ($_GET['adminlogout']) {
    session_destroy();
    unset($_SESSION['user_id']);
    header('location: ../admin/login.php');
}


?>
