<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie Admin</title>
    <link rel="stylesheet" href="../css/admin-style.css">
    <link rel="stylesheet" href="../css/marketing.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
        #btn2{
            background-color: #ffa70e;
        }      
    
    </style>
</head>
<body>
    
    <!-- SideBar -->
    <div class="sidebar" id="sidebar">
        <div class="container">
            <h2>Foodie Admin</h2>
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
                <h2>Food Table</h2>
                <div class="add-user-container">
                    <a href="add_food.php" class="add-user" >Add Food</a>
                </div>
            </div>

         </header>   

         <!-- Table -->
         <div class="container" >
             <form action="../mailer.php" method="post">
                  <ul>
                    <li><label for="">Subject</label><input name="subject" type="text"></li>
                    <li><label for="">Body</label><textarea name="body" rows="10" cols="80" id=""></textarea></li>
                  </ul>
                  <button type="submit">Send</button>
             </form>
          </div>
     </div>
     <script src="../js/script.js"></script>

</body>
</html>