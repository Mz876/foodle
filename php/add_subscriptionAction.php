<?php
include '../inc/connection.php';

$subEmail = $_POST['txtEmail'];

$sql = "INSERT INTO subscriptions(db_subEmail) VALUES ('$subEmail')";

if (mysqli_query($con, $sql)) {
    header('Location:../pages/subscribed-users.php?status=success');
} else {
    error_log(mysqli_error($con));
    header('Location:../pages/add-subscription.php?status=error');
}

mysqli_close($con);

?>