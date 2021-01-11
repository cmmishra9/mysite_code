<?php
error_reporting(E_ALL);

$link =mysqli_connect("localhost","root","", "kuchbhi") or die("Error Could Not connect. ". mysqli_connect_error());

// $q ="CREATE DATABASE kuchbhi";
// $q= "CREATE TABLE persons(
//     id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     first_name VARCHAR(50) NOT NULL,
//     last_name VARCHAR(50) NULL,
//     email VARCHAR(100) NOT NULL UNIQUE
//  )";
// $q= "INSERT INTO persons(first_name, last_name, email) 
//      VALUES(
//          'Raghu',
//          'Mishra',
//          'Raghu@mail.com'
//      )";

// if(mysqli_query($link, $q)){
//     $last_id = mysqli_insert_id($link);
//     echo "record inserted successfully. Last inserted id is: ".$last_id;
// }else{
//     echo "not created". mysqli_error($link);
// }

// $q = "SELECT * FROM persons";
$q = "SELECT * FROM persons ";

if($result = mysqli_query($link, $q)){

    if(mysqli_num_rows($result)>0){
        echo "<table>";
          echo "<tr>";
             echo "<th>ID</th>";
             echo "<th>first_name</th>";
             echo "<th>last_name</th>";
             echo "<th>email</th>";
         echo "</tr>";
         while($row= mysqli_fetch_array($result)){
             
            echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['first_name']."</td>";
                echo "<td>".$row['last_name']."</td>";
                echo "<td>".$row['email']."</td>";
            echo "</tr>";
         }
         echo "</table>";
    }else{
        echo "No record";
    }
}
mysqli_close($link);

// Mysqli, Procedural way
// $link = mysqli_connect("localhost","root", "","mytestdb");
// echo "<pre>";
// var_dump($link);
// if($link === false){
//     die("Error Could Not connect. ". mysqli_connect_error());
// }

// echo "Connected Successfully. Host Info. ".mysqli_get_host_info($link);

// mysqli_close($link);

// var_dump($link);