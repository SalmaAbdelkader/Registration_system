<?php

$name = $email = $password = $phone = $image = '';

$name_error = $email_error = $password_error = $phone_error = $image_error = '';

$form_valid = true;




if (!empty($_POST['submit'])) {

    include "db_sql.php";

    $name = test_input($_POST['name']);
    
    if (empty($name)) {
        $name_error = "Name Field Is Required";
        $form_valid = false;
    }
   
    $email = test_input($_POST['email']);
    
    if (empty($email)) {

        $email_error = "Email Field Is Required";
        $form_valid = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $email_error = "Invalid Email Format";
        $form_valid = false;
        echo $email_error;
    }

    $phone = test_input($_POST['phone']);
   
    if (empty($phone)) {

        $phone_error = "Phone Field Is Required";
        $form_valid = false;
    }


    $password = test_input($_POST['password']);
    if (empty($password)) {

        $password_error = "Password Field Is Required";
        $form_valid = false;
    } else {

        $hash_password =  hash_pass($password);
    }

    if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {

        $folder_dir = "images/";
        $file_dir = $folder_dir . basename($_FILES['img']['name']);
        $file_name = $_FILES['img']['name'];
        $file_tmp_name = $_FILES['img']['tmp_name'];
        $file_size = $_FILES['img']['size'];

        $file_type = $_FILES['img']['type'];

        $file_ext = explode(".", $file_name);
        $file_ext = strtolower(end($file_ext));

        $extentions = array("jpg", "png", "gif", "jpeg");


        if (in_array($file_ext, $extentions)) {

            if ($file_size < 2000000) {

                $image = move_uploaded_file($file_tmp_name, $folder_dir . $name . "." . $file_ext);
                $file_fullname = $name . "." . $file_ext;
            } else {

                echo "File Is Too Large";
            }
        } else {

            echo "Extention File Does Not Found";
        }

      
        
    }else{
         
        $image_error = "Image Field Is Required";
        $form_valid = false;
    }


    if ($form_valid == true) {
        

        $result = add_user($name, $email, $phone, $hash_password, $file_fullname);

        if ($result) {


             header("location:index.php");
        } else {

            echo "SomeThing Wrong ";
        }
    }else{

        echo "Form Not Valid";
    }
}






require "design/add.php";
