<?php

   session_start();
 
   $_SESSION['username']="cmmishra";
   $_SESSION['email']="chandan@gmail.com";

   if(isset($_SESSION['username'])){
      unset($_SESSION['username']);
   }
   ?>