<?php

include 'inc/connection.php';

$categoryId = '';
$name = '';
$price = '';
$description = '';

     if (isset($_POST['category'])) {
        $categoryId = intval($_POST['category']);
    }

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }

    if (isset($_POST['price'])) {
        $price = $_POST['price'];
    }

    if (isset($_POST['description'])) {
        $description = $_POST['description'];
    }


//  // Handle image upload
// if (isset($_FILES['file'])) {
//     $targetDir = "images/"; // Make sure this directory exists and is writable
    
//     // Create directory if it doesn't exist
//     if (!file_exists($targetDir)) {
//         mkdir($targetDir, 0777, true);
//     }
    
//     $fileExtension = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));
//     $newFileName = uniqid() . '.' . $fileExtension;
//     $targetFile = $targetDir . $newFileName;
//     $uploadOk = 1;
//     $errorMsg = '';

//     // Check if file is an actual image
//     if (!getimagesize($_FILES["file"]["tmp_name"])) {
//         $errorMsg = "File is not an image.";
//         $uploadOk = 0;
//     }

//     // Check file size (5MB limit)
//     if ($_FILES["file"]["size"] > 5000000) {
//         $errorMsg = "File is too large. Maximum size is 5MB.";
//         $uploadOk = 0;
//     }

//     // Validate file format
//     if (!in_array($fileExtension, ["jpg", "jpeg", "png", "gif"])) {
//         $errorMsg = "Only JPG, JPEG, PNG & GIF files are allowed.";
//         $uploadOk = 0;
//     }

//     if ($uploadOk == 0) {
//         echo $errorMsg;
//     } else {
//         if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
//             $image = $newFileName;
//             $imagePath = 'images/' . $image; // Remove the '../' as it's causing path issues
//             $uploadSuccess = true;
//         } else {
//             echo "Failed to upload file. Error: " . error_get_last()['message'];
//         }
//     }
// }


 
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {

        $targetDir = "images/uploaded/"; 

        $originalFilename = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $originalFilename;

        move_uploaded_file($_FILES['image']['tmp_name'],$targetFilePath);
    }

    $sql = "insert into food(db_categoryId,db_foodName,db_foodPrice,db_foodDesc,db_foodImg)values('$categoryId','$name','$price','$description','$targetFilePath')";

    
    


    if(mysqli_query($con,$sql)){

        header("location:pages/food.php?success=1");

    }
 
 ?>