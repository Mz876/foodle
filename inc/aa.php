<?php
// Database connection
include 'php/connection.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$foodName = $_POST['food_name'];
$foodDescription = $_POST['description'];
$foodPrice = $_POST['price'];
$foodCategoryId = $_POST['category'];

    // Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        $uploadOk = 0;
        $errorMessage .= "File is not an image. ";
    }

    // Check file size (optional)
    if ($_FILES["image"]["size"] > 500000) {
        $uploadOk = 0;
        $errorMessage .= "Sorry, your file is too large. ";
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        $uploadOk = 0;
        $errorMessage .= "Sorry, only JPG, JPEG, & PNG files are allowed. ";
    }

    // Attempt to upload file and insert data into the database
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Insert data into the database
            $stmt = $conn->prepare("INSERT INTO food (db_foodName,db_categoryId,db_foodPrice,db_foodDesc,db_foodImg) VALUES ('$foodName','$foodCategoryId','$foodPrice','$foodDescription',)");
            $stmt->bind_param("ssdsd", $category, $food_name, $price, $description, $target_file);
            
            if ($stmt->execute()) {
                $successMessage = "New food item added successfully!";
            } else {
                $errorMessage .= "Error: Could not add food item. ";
            }
            $stmt->close();
        } else {
            $errorMessage .= "Sorry, there was an error uploading your file. ";
        }
    }

    // Close the database connection
    $conn->close();
 ?>
?>