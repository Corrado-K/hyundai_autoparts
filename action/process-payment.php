<?php 

require_once('../controllers/order_controller.php');
require_once('../controllers/payment_controller.php');

session_start();
// initialize a client url which we will use to send the reference to the paystack server for verification
$curl = curl_init();

// set options for the curl session insluding the url, headers, timeout, etc
curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.paystack.co/transaction/verify/{$_GET['reference']}",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088",
    "Cache-Control: no-cache",
),
));

// get the response and store
$response = curl_exec($curl);
// if there are any errors
$err = curl_error($curl);
// close the session
curl_close($curl);

// convert the response to PHP object
$decodedResponse = json_decode($response);

// check if the object has a status property and if its equal to 'success' ie. if verification was successful
if(isset($decodedResponse->data->status) && $decodedResponse->data->status === 'success'){
    $cid=$_SESSION['user_id'];
    $ord_date=date("Y/m/d");
    $email = $_GET['email'];
    $amount = $_GET['amount'];
    $reference = $_GET['reference'];
    

    //look for the most recent orderid that has been added to the order table
    $recent=recentOrder_controller($cid);
  

    //insert payment details
    $addPayment=addPayment_controller($recent['recent'], $cid ,$amount,$ord_date);

    if($addPayment){
       
        echo "payment verified successfully and insertion complete";
        $_SESSION['marker'] = 'marked!';
        header("Location: ../trackOrder.php");  
       
        //update orders

    }else{
        echo"payment failed";
    }

    
}else{
    // if verification failed
    echo $response;
}

?>

 
?>