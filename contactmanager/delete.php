<?php

if(isset($_GET['key']) && !empty($_GET['key'])){
    $id = $_GET['key'];
    
    include_once('./common/db.php'); 
    
    $q ="DELETE FROM contacts WHERE id=$id";

    if(mysqli_query($link, $q)){
        header('location: index.php');
        exit();
    }else{
        echo "Error".mysqli_error($link);
    }
}