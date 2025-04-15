<?php

include "inc/connection.php";

$Id = '';
$Idcolumn = '';
$page = '';
$table = '';

if(isset($_GET['ID'])){

    $Id = intval($_GET['ID']);

}


if(isset($_GET['IdColumn'])){

    $Idcolumn = $_GET['IdColumn'];

}

if(isset($_GET['table'])){

    $table = $_GET['table'];

}

if(isset($_GET['page'])){

    $page = $_GET['page'];

}

if($table=='food'){

    if(isset($_GET['imgPath'])){

        $imgPath = $_GET['imgPath'];

        if(file_exists($imgPath)){

            unlink($imgPath);

        }

    }


}




$sql = "delete from $table where $Idcolumn=$Id";

mysqli_query($con,$sql);


header("Location:pages/".$page.".php");


?>