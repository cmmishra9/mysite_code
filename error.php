<?php


if(file_exists('sample.txt')){
    $f =fopen('sample.txt', "r");

}else{
    die("Error: This file you are trying to access doesn't exist.");
}