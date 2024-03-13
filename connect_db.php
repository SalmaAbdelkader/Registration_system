<?php

$server_name = "localhost";
$user_name = "root";
$pass = "";
$db_name = "registration";

$conn = mysqli_connect("$server_name", "$user_name", "" ,"$db_name");
if($conn){

    
} else {

    echo "Failed Connection". mysqli_connect_error();
}