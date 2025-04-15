<?php
session_start();
include '../inc/connection.php';

$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];

$sql = "SELECT * FROM admins WHERE db_adminEmail = '$email' AND db_password = '$password'";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['admin'] = $email;
    header('Location:../pages/food.php');
} else {
    header('Location:../pages/login-page.html?error=1');
}

?>