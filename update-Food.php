<?php

include "inc/connection.php";

$foodId = '';
$price = '';
$categoryId = '';
$newimgPath = '';
$foodName = '';
$foodDesc = '';
$foodImg = '';


if(isset($_POST['Id'])){

    $foodId = $_POST['Id'];

}

if(isset($_POST['originalImagePath'])){
    $foodImg = $_POST['originalImagePath'];
}


if(isset($_POST['newImage'])){

    $newimgPath = $_POST['newImage'];

} 

if(isset($_POST['category'])){

   $categoryId = $_POST['category'];
    
}


if(isset($_POST['name'])){

    $foodName = $_POST['name'];

}


if(isset($_POST['price'])){
    
    $price =$_POST['price'];
}

if(isset($_POST['description'])){

    $foodDesc = $_POST['description'];
}

// if ($newimgPath=='' || $newimgPath==null) {
    

//  } else {
//         unlink($foodImg);
//         $foodImg = 'images/uploaded/' . basename($newimgPath);
//         move_uploaded_file($_FILES['image']['tmp_name'],$foodImg);
// }

if(!empty($_FILES['newImage']) && $_FILES['newImage']['error'] ==0){

    $newimgPath = 'images/uploaded/' . basename($_FILES['newImage']['name']);

    if(!empty($foodImg) && file_exists($foodImg)){
        unlink($foodImg);
    }
    if (move_uploaded_file($_FILES['newImage']['tmp_name'], $newimgPath)) {
        $foodImg = $newimgPath;
    } else {
         error_log("File upload failed");
     }
} 

$sql = "update food set db_foodDesc='$foodDesc',db_foodName='$foodName',db_foodPrice='$price',db_foodImg='$foodImg',db_categoryId='$categoryId'  where db_foodId = '$foodId' ";

if (mysqli_query($con, $sql)) {
     header("Location:pages/food.php");

} else {
    echo "Error: " . mysqli_error($con);
}




?>