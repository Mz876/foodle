<?php

include "inc/connection.php";


$name='';
$email ='';
$password='';

if(isset($_POST['name'])){

    $name = $_POST['name'];

}


if(isset($_POST['email'])){

    $email = $_POST['email'];

}


if(isset($_POST['password'])){

    $password = $_POST['password'];

}


$sql = "insert into admins(db_adminEmail,db_adminName,db_password)values('$email','$name','$password')";

if(mysqli_query($con,$sql)){

    header("location:pages/users-page.php?success=1");


 

}else{

    echo "<h2>Error: </h2>" .mysqli_error($con);

}







?>