<?php
//for header redirection
ob_start();

//start session
session_start(); 

//get the name of the current page
$current_file = $_SERVER['SCRIPT_NAME']; 

//funtion to check for login
function check_login(){
	//check if login session exit
	if (!isset($_SESSION['user_id'])) 
	{
		//redirect to login page
		// $_SESSION['role'] = 0;
    	header('Location: ../login/login.php');
	}
}

//funtion to check for login
function check_admin_login(){
	//check if login session exit
	if (!isset($_SESSION['user_id']) && $_SESSION['role'] == 1) 
	{
		//redirect to login page
		// $_SESSION['role'] = 0;
    	header('Location: ../admin/login.php');
	}
}

function check_login_at_index(){
	//check if login session exit
	if (!isset($_SESSION['user_id'])) 
	{
		//redirect to login page
		$_SESSION['role'] = 0;
    	//header('Location: ..php');
	}
}

//function to check for permission 
function check_permission(){
	//get session role
	if (isset($_SESSION['user_role'])) {
		//assign session to an array
		return $_SESSION['user_role'];
	}
}

?>