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
         <div class="table-container">
            <table class="food-table">
                <thead>
                    <tr>
                        <th class="cm-1">Food Category</td>
                        <th>Food Name</th>
                        <th>Price</th>
                        <th class="cm-2">Description</th>
                        <th class="cm-3">Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td>Chicken Burger</td>
                        <td>$5.99</td>
                        <td>
                            <div class="actions-container">
                                <a href="#" title="Delete"><ion-icon name="trash-outline"></ion-icon></a>
                                <a href="#" title="Edit"><ion-icon name="create-outline"></ion-icon></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>HamBurger</td>
                        <td>$4.99</td>
                        <td>
                            <div class="actions-container">
                                <a href="#" title="Delete"><ion-icon name="trash-outline"></ion-icon></a>
                                <a href="#" title="Edit"><ion-icon name="create-outline"></ion-icon></a>
                            </div>
                        </td>
                    </tr> -->
                <?php
                    include '../inc/connection.php';
            
                    $sql = 'SElECT * from food join categories on food.db_categoryId = categories.db_categoryId';
                    $IdColumn = 'db_foodId';
                    $redirectPage = 'food';
                    $result = mysqli_query($con,$sql);
                 
                    while($row = mysqli_fetch_assoc($result)){
                        $imgPath = $row['db_foodImg'];
                        echo'
                            <tr>
                                <td class="cm-1">'.$row['db_categoryName'].'</td>
                                <td>'.$row["db_foodName"].'</td>
                                <td>'.$row["db_foodPrice"].'</td>
                                <td class="cm-2">'.$row["db_foodDesc"].'</td>
                                <td class="cm-3">'.$row['db_foodImg'].'</td>
                                 <td> 
                                 <div class="actions-container">
                                     <a href="../delete.php?ID='.$row['db_foodId'].'&table=food&IdColumn='.$IdColumn.'&page='.$redirectPage.'&imgPath='.$imgPath.'" title="Delete"><ion-icon name="trash-outline"></ion-icon></a> 
                                     <a href="updateFood.php?ID='.$row['db_foodId'].'&foodDesc='.$row['db_foodDesc'].'&foodName='.$row['db_foodName'].'&price='.$row['db_foodPrice'].'&ColumnCategory='.$row['db_categoryId'].'&imgPath='.$row['db_foodImg'].'" title="Edit"><ion-icon name="create-outline"></ion-icon></a>
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