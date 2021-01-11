<?php

$dir = "backend";

function outputFiles($dir){
    $t= "note.txt";
    if(is_dir($dir) && file_exists($dir)){
        $result = scandir($dir);
        echo "<pre>";
        $files= array_diff($result, array('.','..'));
        // print_r($files);
        // echo count($files);
        foreach($files as $f){
        
            if(is_file("$dir/$f")){
                
                echo "-".$f . "<br>";
                file_put_contents($t,$f, FILE_APPEND);
            }else if(is_dir("$dir/$f")){
                echo "<p style='color:red;'><em>$f</em></p>";
                outputFiles("$dir/$f");
            }
        }
    }else{
        echo "error : no files found";
    }
}

outputFiles($dir);