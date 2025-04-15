<?php
   include 'inc/connection.php';

   $subEmail='';
   $message = '';


   if(isset($_POST['email'])){
      $subEmail = $_POST['email'];
   
   }

   
   $sql = "insert into subscriptions(db_subEmail) values ('$subEmail')";


   if(mysqli_query($con,$sql)){

      $message = 'Thank you for subscribing. You will start getting last updates about our offers :)';

   }else{
      $message = 'Error' . mysqli_error($con);
   }

   
 
   $con->close();

   echo $message;

?>