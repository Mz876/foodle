<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie Admin</title>
    <link rel="stylesheet" href="../css/admin-style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
        #btn3{
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
                <li><a href="login-page.php" id="btn6">LogOut</a></li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
     <div class="main-content" id="main-content">

        <button class="toggle-btn" id="toggle-btn">☰</button>

         <!-- Header  -->
        <header class="header-user">
            <div class="container">
                <h2>Admin Users</h2>
                <div class="add-user-container">
                    <a href="add-user.php" class="add-user" >Add User</a>
                </div>
            </div>

         </header>   

         <?php

           if(isset($_GET['success']) && $_GET['success'] == 1){

            echo "<p id='successMessage' style='color:green;text-align:center;margin:10px;'> User Added Successfully</p>
            <script>
                setTimeout(function(){

                    var message = document.getElementById('successMessage');

                    if(message){
                        message.style.display = 'none';
                    }


                },5000);

            </script>";

           }


          ?>
         <!-- Table -->
         <div class="user-table-container">
            <table class="user-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th class="cm-3">Password</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td>Mhmd</td>
                        <td>mhmd@test.com</td>
                        <td>
                            <div class="actions-container">
                                <a href="#" title="Delete"><ion-icon name="trash-outline"></ion-icon></a>
                                <a href="#" title="Edit"><ion-icon name="create-outline"></ion-icon></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Mustafa</td>
                        <td>mustafa@test.com</td>
                        <td>
                            <div class="actions-container">
                                <a href="#" title="Delete"><ion-icon name="trash-outline"></ion-icon></a>
                                <a href="#" title="Edit"><ion-icon name="create-outline"></ion-icon></a>
                            </div>
                        </td>
                    </tr> -->
    <?php
        include '../inc/connection.php';

        $sql = 'select * from admins';
        $IdColumn = 'db_adminId';
        $redirectPage = 'users-page';
        $result = mysqli_query($con,$sql);

        while($row = mysqli_fetch_assoc($result)){

            echo'
                <tr>
                    <td>'.$row["db_adminName"].'</td>
                    <td>'.$row["db_adminEmail"].'</td>
                    <td class="cm-3">'.$row['db_password'].'</td>
                    <td>    
                      <div class="actions-container">
                        <a href="updateAdmins.php?ID='.$row['db_adminId'].'&email='.$row['db_adminEmail'].'&name='.$row['db_adminName'].'&password='.$row['db_password'].'" title="Update"><ion-icon name="create-outline"></ion-icon></a>
                        <a href="../delete.php?ID='.$row['db_adminId'].'&table=admins&IdColumn='.$IdColumn.'&page='.$redirectPage.'" title="Delete"><ion-icon name="trash-outline"></ion-icon></a> 
                      </div>
                     </td>
                </tr>        
               ';

        }

?>
                </tbody>
            </table>
        </div>
     </div>
     <script src="../js/script.js"></script>

</body>
</html>