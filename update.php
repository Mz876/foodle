<?php

include "inc/connection.php";

$Id = '';
$name = '';
$email = '';
$password='';

if(isset($_POST['ID'])){

    $Id = intval($_POST['ID']);

}


if(isset($_POST['name'])){

    $name = $_POST['name'];

}


if(isset($_POST['email'])){
    
    $email =$_POST['email'];
}

if(isset($_POST['password'])){

    $password = $_POST['password'];
}

 

$sql = "update admins set db_adminEmail='$email',db_adminName='$name',db_password='$password'  where db_adminId = '$Id' ";

mysqli_query($con,$sql);


header("Location:pages/users-page.php");


?>