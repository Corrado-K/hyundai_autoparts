<?php

require '../settings/db_class.php';

// inherit the methods from Connection
class Product extends Connection
{
    // PRODUCT

    public function add_product($product_cat,$product_brand,$product_title,$product_price,$product_description,$product_image,$product_keyword)
    {
        // return true or false
        return $this->query(
            "insert into products(product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) values('$product_cat','$product_brand','$product_title','$product_price','$product_description','$product_image','$product_keyword')"
        );
    }

    function select_all_products()
    {
        // return array or false
        return $this->fetch('select * from products inner join categories on products.product_cat = categories.cat_id
        inner join brands on products.product_brand = brands.brand_id');
    }

    function update_one_product($product_id,$product_cat,$product_brand,$product_title,$product_price,$product_description,$product_image,$product_keyword)
    {
        // return true or false
        return $this->query(
            "update products set product_cat='$product_cat',product_brand='$product_brand',product_title='$product_title',product_price='$product_price',product_desc='$product_description',product_image='$product_image',product_keywords='$product_keyword' where product_id = '$product_id'"
        );
    }

    function select_one_product($product_id)
    {
        // return associative array or false
        return $this->fetchOne("select * from products inner join categories on products.product_cat = categories.cat_id
                                                        inner join brands on products.product_brand = brands.brand_id
                                                        where product_id='$product_id'");
    }


    function select_one_product_on_keyword($product_keyword){
        return $this->fetch("select * from products where product_keywords like '%$product_keyword%' or product_title like '%$product_keyword%'");
    }

    public function deleteProduct($product_id)
    {
        // return true or false
        return $this->query(
            "delete from products where product_id='$product_id'"
        );
    }






    ############################################################################

    // BRAND

    public function add_brand($brand)
    {
        // return true or false
        return $this->query("insert into brands(brand_name) values('$brand')");
    }

    function select_one_brand($id)
    {
        // return associative array or false
        return $this->fetchOne("select * from brands where brand_id='$id'");
    }

    function update_one_brand($id, $name)
    {
        // return true or false
        return $this->query(
            "update brands set brand_name='$name' where brand_id = '$id'"
        );
    }

    function select_all_brands()
    {
        // return array or false
        return $this->fetch('select * from brands');
    }


    function deleteBrand($brand_id){

        // return true or false
        return $this->query(
            "delete from brands where brand_id='$brand_id'"
        );
    }

    ########################################################################

    // CATEGORY

    public function add_category($category)
    {
        // return true or false
        return $this->query(
            "insert into categories(cat_name) values('$category')"
        );
    }

    function select_all_categories()
    {
        // return array or false
        return $this->fetch('select * from categories');
    }

    function select_one_category($id)
    {
        // return associative array or false
        return $this->fetchOne("select * from categories where cat_id='$id'");
    }

    function update_one_category($id, $name)
    {
        // return true or false
        return $this->query(
            "update categories set cat_name='$name' where cat_id = '$id'"
        );
    }

    function deleteCategory($cat_id){

        // return true or false
        return $this->query(
            "delete from categories where cat_id='$cat_id'"
        );
    }



    #####################################################################################
}

?>
