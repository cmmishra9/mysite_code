<?php

$to = "contact@iqbotics.com";
$subject = "Job Details for php developer";
$message = "PHP JOB AVAILABLE IF YOU KNOW PHP";
$from = "chandanmshr476@gamil.com";

if( mail($to, $subject, $message) ){
    echo "Your mail has been sent";
}else{
    echo "Unable to send email. Please Try again";
}