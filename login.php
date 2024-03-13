<?php 
session_start();

   if(!empty($_SESSION['username'])){

       header(("location: index.php"));
   }

$form_valid = true;

if(isset($_POST['login'])){

    include "db_sql.php";
    
    $email = test_input($_POST['email']);
    if(empty($email)){

        $email_error = "Email Field Is Required";
        $form_valid = false;
    } elseif (!filter_var($email , FILTER_VALIDATE_EMAIL)){

        $email_error = "Invalid Email Format";
        $form_valid = false;

    }

    
    $password = test_input($_POST['password']);
    if(empty($password)){

        $password_error = "Password Field Is Required";
        $form_valid = false;
    }

    if($form_valid == true){

             
        $data = login($email , $password);
        $stored_hashed_password = $data['password'];

       if(!empty($data)){

            if(password_verify('$password' , $stored_hashed_password)){

                $_SESSION['username'] = $data;
            
                header("location: index.php");
            }else{

                echo "passwprd wrong";
            }

       }else{

          echo "something worng";
       }
      

    }

    
}





require "design/login.php";