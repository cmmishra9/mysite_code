dfsdfsd sfsdfsdf 

<?php

$f= "testdir";

// if(file_exists($f)){

//     $c= file_get_contents($f);
   
//     file_put_contents($f, "sdfsdf sdfsdf sdf sdfsf sdfdsf sdfa", FILE_APPEND);

//     echo $c;
// }else{
//     echo "Error";
// }
// is_file($f);
// is_dir($f);

// is_executable($f);

if(!is_dir($f)){

    if ( mkdir($f) ){
        echo "dir done";
    }else{
        echo "error:not done";
    }
}

// unlink($f);