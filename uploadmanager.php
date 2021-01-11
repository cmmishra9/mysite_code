<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

    // echo "<pre>";
    // print_r($_FILES);
    if(isset($_FILES['photo']) && $_FILES['photo']["error"]==0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if(!array_key_exists($ext, $allowed)){
            echo "Error please select a valid file format";
        }
        $maxsize =  5*1024*1024;

        if($filesize>$maxsize){
            echo "Error : file size is larger than the allowed limit";
        }

        if(in_array($filetype, $allowed)){

            if(file_exists("upload/".$filename)){
                echo $filename . "is already exists";
            }else{

                move_uploaded_file($_FILES['photo']["tmp_name"], "upload/".time()."_".$_FILES['photo']["name"]);
                echo "Your File was uploaded successfully";
            }
        }else{
            echo "Error: There was a problem uploading with file. please try again";
        }
    }else{
        echo $_FILES['photo']["error"];
    }
}

