<?php

try{

    $pdo = new PDO("mysql:host=localhost;dbname=countriesdata", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (Exception $e){
    die("Error". $e->getMessage());
}

try{
    if(isset($_REQUEST['term'])){
        $sql = "SELECT * FROM country WHERE name LIKE :term";
        $stmt = $pdo->prepare($sql);

        $term = $_REQUEST['term']."%";
        $stmt->bindParam(":term", $term);

        $stmt->execute();

        if($stmt->rowCount()>0){
            while( $row= $stmt->fetch() ){
                echo "<p>".$row['name']. "</p>";
            }
        }else{
            echo "<p>No Match Found</p>";
        }
    }
}catch(Exception $e){
    die($e->getMessage());
}

unset($stmt);

unset($pdo);

?>