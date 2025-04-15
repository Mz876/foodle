<?php

 include '../inc/connection.php';


 session_start();

$whatsappNumber;
$total;

 if(isset($_GET['phoneNumber'])){

    $whatsappNumber = $_GET['phoneNumber'];

 }

 $ordernumber = $whatsappNumber;
 for($i=0;$i<4;$i++){
    $ordernumber = intval($ordernumber) /10;
 }

if(isset($_GET['total'])){
    $total = $_GET['total'];
}


$ordernumber = intval($ordernumber);
$message = urlencode("Order Number is $ordernumber\nTotal = $total");


$whatsappUrl = "https://api.whatsapp.com/send?phone=961$whatsappNumber&text=$message";



header("Location:$whatsappUrl");
 
session_destroy();


 
?>