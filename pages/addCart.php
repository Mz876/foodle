<?php
include '../inc/connection.php';
session_start();

 $Id = $CategoryId = '';
$name = '';
$price = 0;
$img = '';

$_SESSION['cartState'] = true;

if(isset($_GET['Id'])){
    $Id = $_GET['Id'];
}

if(isset($_GET['name'])){
    $name = $_GET['name'];
}

if(isset($_GET['price'])){
    $price = $_GET['price'];
}

if(isset($_GET['img'])){
    $img = $_GET['img'];
}

if(isset($_GET['CategoryId'])){
    $CategoryId = $_GET['CategoryId'];
}

 $food = [
    'name' => $name,
    'price' => $price,
    'img' => $img,
    'foodId' => $Id,
    'orders' => 1,
    'categoryId' => $CategoryId
];

 if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

 $found = false;

foreach($_SESSION['cart'] as &$f) {
    if ($f['foodId'] == $food['foodId']) {
        $f['orders']++;  
        $f['price'] += $price;   
        $found = true;
        break;  
    }
}

 if (!$found) {
    $_SESSION['cart'][] = $food;
}

 if (!isset($_SESSION['total'])) {
    $_SESSION['total'] = 0;
}
$_SESSION['total'] += $price;

 header("location:menu.php?Category=$CategoryId");
exit();
?>
