<?php

require '../class/productClass.php';

// PRODUCT
function add_product_controller($product_cat,$product_brand,$product_title,$product_price,$product_description,$product_image,$product_keyword){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->add_product($product_cat,$product_brand,$product_title,$product_price,$product_description,$product_image,$product_keyword);

}


function select_all_products_controller(){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_all_products();

}

function update_product_controller($product_id,$product_cat,$product_brand,$product_title,$product_price,$product_description,$product_image,$product_keyword){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->update_one_product($product_id,$product_cat,$product_brand,$product_title,$product_price,$product_description,$product_image,$product_keyword);

}


function select_one_product_controller($product_id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_one_product($product_id);

}

function select_one_product_on_keyword_controller($product_keyword){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_one_product_on_keyword($product_keyword);

}


function remove_from_products_controller($product_id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->deleteProduct($product_id);

}









//BRAND

function add_brand_controller($brand){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->add_brand($brand);

}

function update_brand_controller($id, $name){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->update_one_brand($id, $name);

}



function select_all_brands_controller(){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_all_brands();

}

function select_one_brand_controller($id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_one_brand($id);

}

function remove_from_brands_controller($brand_id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->deleteBrand($brand_id);

}





//CATEGORY
function add_category_controller($category){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->add_category($category);

}

function select_all_categories_controller(){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_all_categories();

}

function update_category_controller($id, $name){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->update_one_category($id, $name);

}
function select_one_category_controller($id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_one_category($id);

}

function remove_from_cat_controller($cat_id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->deleteCategory($cat_id);

}



/* 

function login_product_controller($email, $pass){
    // create an instance of the product class
    $product_instance = new product();
    // call the method from the class
    return $product_instance->login_product($email, $pass);

}


function select_one_product_controller_email($email){
    // create an instance of the product class
    $product_instance = new product();
    // call the method from the class
    return $product_instance->select_one_product_email($email);

}


function delete_product_controller($id){
    // create an instance of the product class
    $product_instance = new product();
    // call the method from the class
    return $product_instance->delete_one_product($id);

}

function update_product_controller($id, $name, $description, $qty){
    // create an instance of the product class
    $product_instance = new product();
    // call the method from the class
    return $product_instance->update_one_product($id, $name, $description, $qty);

}

function select_all_products_controller(){
    // create an instance of the product class
    $product_instance = new product();
    // call the method from the class
    return $product_instance->select_all_products();

}


function select_one_product_controller($id){
    // create an instance of the product class
    $product_instance = new product();
    // call the method from the class
    return $product_instance->select_one_product($id);

}

 */


?>