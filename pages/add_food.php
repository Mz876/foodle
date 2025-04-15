 

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
    
    <div class="sidebar" id="sidebar">
        <div class="container">
            <h2>Foodie Admin</h2>
            <ul>
                 <li><a href="delete_food.php" id="btn2">Food Table</a></li>
                <li><a href="users-page.php" id="btn3">Admin Users</a></li>
                <li><a href="subscribed-users.php" id="btn4">Subscribed Users</a></li>
                <li><a href="login-page.html" id="btn5">LogOut</a></li>
            </ul>
        </div>
    </div>

     <div class="main-content" id="main-content">

        <button class="toggle-btn" id="toggle-btn">☰</button>

        <header class="header-add">
            <a href="food.php"><img src="../assets/icons/back.png"></a>
            <h2>Add New Food Screen</h2>
        </header>   

         <div class="form-container">
            <form action="../addFood.php" method="POST" enctype="multipart/form-data">
                <!-- Category Selection -->
                <div class="form-group">
                    <label for="category">Category:</label>
                    <select name="category" id="txtCategory" required>
                        <option value="" disabled selected>Select Category</option>
                        <option value="1">Burgers</option>
                        <option value="2">Crispy</option>
                        <option value="3">Pasta</option>
                        <option value="4">Salads</option>
                    </select>
                </div>
    
                <!-- Food Name -->
                <div class="form-group">
                    <label for="name">Food Name:</label>
                    <input type="text" id="food_name" name="name" placeholder="Enter food name" required>
                </div>
    
                <!-- Price -->
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" id="price" name="price" placeholder="Enter price" min="0" step="0.01" required>
                </div>
    
                <!-- Image Upload -->
                <div class="form-group">
                    <label for="image">Upload Image:</label>
                    <input type="file" id="image" accept="image/*" name="image"  required>
                </div>
    
                <!-- Description -->
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="4" placeholder="Enter food description" required></textarea>
                </div>
    
                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit" name="submit" class="btn">Add Food</button>
                </div>
            </form>
        </div>
     </div>
     <script src="../js/script.js"></script>
</body>
</html>