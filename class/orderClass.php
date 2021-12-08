<?php
require '../settings/db_class.php';

// inherit the methods from Connection
class Order extends Connection
{
    // cart

    public function add_order($cid, $invoice_no, $order_date, $order_status)
    {
        // return true or false
        
        return $this->query(
            "insert into orders(customer_id,invoice_no,order_date,order_status) values('$cid','$invoice_no','$order_date','$order_status')"
        
        );
        
    }

    public function view_order($cid)
    {
        // return array or false
        return $this->fetch("select * from orders where customer_id='$cid'");
    }

    public function view_payment($cid)
    {
        // return array or false
        return $this->fetch("select * from payment where customer_id='$cid'");
    }

/* 
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
        return $this->fetch("select sum(product_price) as total from cart inner join products on cart.p_id = products.product_id
                            where ip_add='$ip_add' or c_id='$cid'");
    }
 */
    
}

?>
