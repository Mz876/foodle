<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <style>
        #btn3{
            background-color: #ffa70e;
        }
    </style>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../css/admin-style.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="container">
            <h2>Foodie Admin</h2>
            <ul>
                 <li><a href="delete_food.php" id="btn2">Food Table</a></li>
                <li><a href="users-page.php" id="btn3">Admin Users</a></li>
                <li><a href="subscribed-users-page.php" id="btn4">Subscribed Users</a></li>
                <li><a href="login-page.html" id="btn5">LogOut</a></li>
            </ul>
        </div>
    </div>

    <div class="main-content" id="main-content">

        <button class="toggle-btn" id="toggle-btn">☰</button>

        <!-- Header -->
        <header class="header-add">
            <a href="users-page.php"><img src="../assets/icons/back.png"></a>
            <h2>Add New User</h2>
        </header>

        <!-- Form -->
        <div class="user-form-container">
            <form action="../addUser.php" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="txtName">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="txtEmail">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="txtPassword">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn">Add User</button>
                </div>
            </form>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>