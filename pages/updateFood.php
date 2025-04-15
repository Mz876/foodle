<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie Admin</title>
    <link rel="stylesheet" href="../css/admin-style.css">
    <style>
        #btn2 {
            background-color: #ffa70e;
        }
    </style>
</head>
<body>
    
<?php
    include '../inc/connection.php';

    $price = '';
    $columnCategory = '';
    $imgPath = '';
    $foodName = '';
    $foodDesc = '';
    $Id='';

    if(isset($_GET['ID'])){
        $Id = $_GET['ID'];
    }

    if(isset($_GET['price'])){
        $price = $_GET['price'];
    }
    
    if(isset($_GET['ColumnCategory'])){
        $columnCategory = $_GET['ColumnCategory'];
    }

    if(isset($_GET['imgPath'])){
        $imgPath = $_GET['imgPath'];
    }

    if(isset($_GET['foodName'])){
        $foodName = $_GET['foodName'];
    }

    if(isset($_GET['foodDesc'])){
        $foodDesc = $_GET['foodDesc'];
    }
?>
 
<div class="main-content" style="margin:auto;" id="main-content">
    <button class="toggle-btn" id="toggle-btn">☰</button>

    <header class="header-add">
        <a href="food.php"><img src="../assets/icons/back.png" alt="Back"></a>
        <h2>Update Food Screen</h2>
    </header>   

    <div class="form-container">
        <form action="../update-Food.php" method="POST" enctype="multipart/form-data">
            <!-- Category Selection -->
            <div class="form-group">
                <label for="category">Category:</label>
                <select name="category" id="txtCategory" required>
                    <option value="" disabled selected>Select Category</option>
                    <option value="1" <?= $columnCategory == '1' ? 'selected' : '' ?>>Burgers</option>
                    <option value="2" <?= $columnCategory == '2' ? 'selected' : '' ?>>Crispy</option>
                    <option value="3" <?= $columnCategory == '3' ? 'selected' : '' ?>>Pasta</option>
                    <option value="4" <?= $columnCategory == '4' ? 'selected' : '' ?>>Salads</option>
                </select>
            </div>
            <input name="Id" type="hidden" value=<?=htmlspecialchars($Id) ?> >
            <!-- Food Name -->
            <div class="form-group">
                <label for="name">Food Name:</label>
                <input type="text" id="food_name" name="name" value="<?= htmlspecialchars($foodName) ?>" required>
            </div>

            <!-- Price -->
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" value="<?= htmlspecialchars($price) ?>" required>
            </div>

            <!-- Image Upload -->
            <div class="form-group">
                <label for="image">Upload Image:</label>
                <input type="file" id="image" accept="image/*" name="newImage">
                <?php if (!empty($imgPath)) : ?>
                    <p>Current Image: <img  src="../<?=htmlspecialchars($imgPath) ?>" alt="Image" style="max-width: 100px;"></p>
                    <input name="originalImagePath" value="<?=htmlspecialchars($imgPath)?>" type="hidden">
                <?php endif; ?>
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" required><?= htmlspecialchars($foodDesc) ?></textarea>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" name="submit" style="padding:1rem 0rem;" class="btn">Update Food</button>
            </div>
        </form>
    </div>
</div>
<script src="../js/script.js"></script>
</body>
</html>
