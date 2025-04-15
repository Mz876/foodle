<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location:../pages/login-page.html?error=2");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodle Admin</title>
    <link rel="stylesheet" href="../css/admin-style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
        #btn4 {
            background-color: #ffa70e;
        }
    </style>
</head>

<body>

    <!-- SideBar -->
    <div class="sidebar" id="sidebar">
        <div class="container">
            <h2>Foodle Admin</h2>
            <ul>
                <li><a href="food.php" id="btn2">Food Table</a></li>
                <li><a href="users-page.php" id="btn3">Admin Users</a></li>
                <li><a href="subscribed-users.php" id="btn4">Subscribed Users</a></li>
                <li><a href="sendAds.php" id="btn5">Marketing</a></li>
                <li><a href="login-page.html" id="btn6">LogOut</a></li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="main-content">

        <button class="toggle-btn" id="toggle-btn">☰</button>

        <!-- Header  -->
        <header class="header-user">
            <div class="container">
                <h2>Subscribed Users</h2>
                <div class="add-user-container">
                    <a href="add-subscription.php" class="add-user">Add Subscription</a>
                </div>
            </div>

        </header>

        <!-- Table -->
        <div class="user-table-container">
            <table class="user-table">
                <thead>
                    <tr>
                        <th>Client Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- php -->
                    <?php
                    include '../inc/connection.php';

                    $sql = 'select * from subscriptions';
                    $IdColumn = 'db_subId';
                    $result = mysqli_query($con,$sql);
                    $redirectPage = 'subscribed-users';

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                                <tr>
                                    <td>" . $row['db_subEmail'] . "</td>
                                    <td>
                                        <div class='actions-container'>
                                        <a href='../delete.php?ID=" . $row['db_subId'] . "&table=subscriptions&IdColumn=" . $IdColumn . "&page=" . $redirectPage . "' title='Delete'><ion-icon name='trash-outline'></ion-icon></a> 
                                   
                                        </div>
                                    </td>
                                </tr>         
                            ";

                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../js/script.js"></script>

</body>

</html>