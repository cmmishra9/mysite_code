<?php
// Defining function
function whatIsToday(){
    echo "Today is " . date('l', time());
}
// Calling function
whatIsToday();

function getSum($x, $y){
    echo $x+$y; 
}

getSum(12, 14);
?>