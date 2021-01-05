<?php

if(isset($_GET['calc'])){
    $opr=$_GET['oper'];
      switch ($opr) {
          case 'add':
              echo $_GET['num1']+$_GET['num2'];
              break;
          case 'sub':
            echo $_GET['num1'] - $_GET['num2'];
            break;
        case 'mul':
            echo $_GET['num1'] * $_GET['num2'];
            break;
        case 'divide':
            echo $_GET['num1'] / $_GET['num2'];
            break;
          default:
              echo "choose a right operation";
              break;
      }
}else{
    echo "Get out of my property";
}
   

?>