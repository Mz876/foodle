<?php

    include '../inc/connection.php';
    session_start();  // Start session if not already started

    // Initialize variables
    $Id = $add = $CategoryId =0;
    $found = false;

    $_SESSION['cartState'] = true;

    // Get query parameters
    if (isset($_GET['Id'])) {
        $Id = $_GET['Id'];
    }

 

    if (isset($_GET['add'])) {
        $add = $_GET['add'];  // 1 for adding, 0 for removing
    }

    if (isset($_GET['categoryId'])) {
        $CategoryId = $_GET['categoryId'];
    }

    // Ensure cart exists
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }


    $sql = "select db_foodPrice from food where db_foodId=$Id";
    
    $price = 0;
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $price = $row['db_foodPrice'];
    }
 
    // Logic for adding or removing items
    if ($add == 1) {
        // Add item to cart or increase the quantity
        foreach ($_SESSION['cart'] as &$f) {
            if ($f['foodId'] == $Id) {
                $f['orders']++;  // Increment order count
                $f['price'] += $price;  // Add to price
                $_SESSION['total'] += $price;
                $found = true;  // Item found and updated
                break;
            }
        }

        // If the item is not found, add it as a new item
        if (!$found) {
            $_SESSION['cart'][] = [
                'foodId' => $Id,
                'orders' => 1,
                'price' => $price
            ];
        }
    } else if ($add == 0) {
        // Remove item from cart or decrease the quantity
        foreach ($_SESSION['cart'] as $key => &$f) {
            if ($f['foodId'] == $Id) {
                $f['orders']--;  // Decrease order count
                $f['price'] -= $price;  // Subtract from price
                $_SESSION['total'] -= $price;
                // If orders reach 0 or less, remove the item
                if ($f['orders'] <= 0) {
                    unset($_SESSION['cart'][$key]);  // Remove item from cart
                }
                break;
            }
        }
    }

    // Redirect to the menu page after operation
    header("Location: menu.php?Category=$CategoryId");
    exit();
?>
