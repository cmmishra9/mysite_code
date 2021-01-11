<?php

$islogin=true;


echo "backend";

if($islogin==true){
    if(file_exists("dashboard.php")){
        header("location: dashboard.php");
    }
}