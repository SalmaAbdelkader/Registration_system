<?php

include "db_sql.php";

$name = $email = $password = $phone = $image = '';

$name_error = $email_error = $password_error = $phone_error = $image_error = '';

$form_valid = true;




if (isset($_POST['submit'])) {

    $id = $_POST['id'];

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
    }

    $phone = test_input($_POST['phone']);

    if (empty($phone)) {

        $phone_error = "Phone Field Is Required";
        $form_valid = false;
    }


    $password = test_input($_POST['password']);
    if (empty($password)) {

        $hash_password = $password;
        $form_valid = true;
    } else {

        $hash_password =  hash_pass($password);
    }


    $old_image = $_POST['old_image'];
    $file_name = test_input($_FILES['img']['name']);
    if ($file_name != "") {


        $folder_dir = "images/";
        $file_dir = $folder_dir . basename($_FILES['img']['name']);

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
    } else {

        $file_fullname = $old_image;
    }

    if ($form_valid == true) {

        $result = update_user($name, $email, $phone, $hash_password, $file_fullname, $id);

        if ($result) {

            $old_image_path = "images/". $old_image;
            if($file_fullname == $old_image && file_exists($old_image)){

                unlink($old_image);
            }


            header("location:index.php");
        } else {

            echo "SomeThing Wrong ";
        }
    } else {

        echo "Form Not Valid";
    }
} else {

    $id = $_GET['id'];
    $data = getUserById($id);
}



require  "design/update.php";
