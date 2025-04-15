<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie Admin</title>
    <link rel="stylesheet" href="../css/admin-style.css">
    <style>
        #btn2{
            background-color: #ffa70e;
        }
    </style>
</head>
<body>
<?php


include "../inc/connection.php";

     $adminId = '';
     $adminName='';
     $adminEmail='';
     $adminPassword='';


     if(isset($_GET['ID'])){

        $adminId = $_GET['ID'];


     }


     if(isset($_GET['email'])){

        $adminName = $_GET['email'];

     }


     if(isset($_GET['name'])){

        $adminEmail = $_GET['name'];

     }

     if(isset($_GET["password"])){

        $adminPassword = $_GET["password"];

     }


?>
     <div style="margin:auto;" class="main-content" id="main-content">

        <button class="toggle-btn" id="toggle-btn">☰</button>

        <header class="header-add">
            <a href="users-page.php"><img src="../assets/icons/back.png"></a>
            <h2>Update Admin Info</h2>
        </header>   

         <div class="form-container">
            <form action="../update.php" method="POST">  
                <div class="form-group">
                    <label for="ID">Admin Id:</label>
                    <input type="text" name="ID" value="<?php echo htmlspecialchars($adminId)  ?>" readonly>
    
                </div>
                 <div class="form-group">
                    <label for="name">Admin Name:</label>
                    <input type="text" name="name" value="<?php echo htmlspecialchars($adminName)  ?>" required>
                </div>
    
                 <div class="form-group">
                    <label for="email">Admin Email:</label>
                    <input style="width:100%;padding:12px ;border:1px solid #CCC;border-radius:6px;" value="<?php echo htmlspecialchars($adminEmail)  ?>" type="email" name="email"   required>
                </div>
    
                 <div class="form-group">
                    <label for="password">Admin Password:</label>
                    <input type="text"  name="password"  value="<?php echo htmlspecialchars($adminPassword)  ?>" required>
                </div>
 
                 <div class="form-group">
                    <button type="submit" style="padding:20px;font-size:1.2rem;" name="submit" class="btn">Update</button>
                </div>
            </form>
        </div>
     </div>
     <script src="../js/script.js"></script>
</body>
</html>