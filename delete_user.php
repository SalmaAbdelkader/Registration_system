<?php 

session_start();

include "db_sql.php";


if(empty($_SESSION['username'])){

    header("location: login.php");
}

$id = $_GET['id'];

$user_id = $_SESSION['username']['id'];

if($user_id == $id ){

    echo "You Can Not Delete Your Data";
    // header("location:index.php");
}else{


    $res = delete($id);

    if($res == true ){
    
        header("location:index.php");
    }
}

