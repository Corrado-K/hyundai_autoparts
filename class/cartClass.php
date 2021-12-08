<?php
require '../settings/db_class.php';

// inherit the methods from Connection
class Cart extends Connection
{
    // cart

    public function add_to_cart($pid, $ip_add, $cid, $qty)
    {
        // return true or false
        if(!isset($_SESSION['user_id'])){
            return $this->query(
                "insert into cart(p_id,ip_add,qty) values('$pid','$ip_add','$qty')"
            );      
        }else{
            return $this->query(
               "insert into cart(p_id,ip_add,c_id,qty) values('$pid','$ip_add','$cid','$qty')"
            
            );
        }
    }

    public function select_item_in_cart($pid, $ip_add, $cid){
        // return array or false
        return $this->fetchOne("select * from cart inner join products on cart.p_id = products.product_id
        where (ip_add='$ip_add' or c_id='$cid') and p_id='$pid'");
    }

    public function view_all_products_in_cart($ip_add, $cid)
    {
        // return array or false
        return $this->fetch("select * from cart inner join products on cart.p_id = products.product_id
                                                where ip_add='$ip_add' or c_id='$cid'");
    }


    public function update_quantity($pid, $ip_add, $cid, $qty)
    {
        // return true or false
        return $this->query(
            "update cart set qty='$qty' where p_id='$pid' and (ip_add='$ip_add' or c_id='$cid')"
        );
    }

    public function remove_from_cart($pid, $ip_add, $cid)
    {
        // return true or false
        return $this->query(
            "delete from cart where p_id='$pid' and (ip_add='$ip_add' or c_id='$cid')"
        );
    }

    public function total_price($ip_add,$cid){
        return $this->fetchOne("select sum(product_price * qty) as total from cart inner join products on cart.p_id = products.product_id
                            where ip_add='$ip_add' or c_id='$cid'");
    }

    
}

?>
