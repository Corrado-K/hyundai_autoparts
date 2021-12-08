<?php

require('../settings/db_class.php');

// inherit the methods from Connection
class Customer extends Connection{
	

	function add_customer($name, $email, $pass, $country, $city, $contact, $image){
		// return true or false
		return $this->query("insert into customer(customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, customer_image ) values('$name', '$email', '$pass', '$country', '$city', '$contact', '$image')");
	}

	function login_customer($email, $pass){
		// return associative array or false
		return $this->fetchOne("select * from customer where customer_email='$email'and customer_pass='$pass'");
	}

	function select_one_customer_email($email){
		// return associative array or false
		return $this->fetchOne("select * from customers where customer_email='$email'");
	}
/* 
	function delete_one_customer($id){
		// return true or false
		return $this->query("delete from customers where id = '$id'");
	}

	function update_one_customer($id, $name, $description, $qty){
		// return true or false
		return $this->query("update customers set name='$name', description='$description', qty='$qty' where id = '$id'");
	}

	function select_all_customers(){
		// return array or false
		return $this->fetch("select * from customers");
	}

	function select_one_customer($id){
		// return associative array or false
		return $this->fetchOne("select * from customers where id='$id'");
	} */

}

?>