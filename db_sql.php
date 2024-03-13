<?php

function register($name, $email, $phone, $password, $image)
{

   include "connect_db.php";

   $sql = "INSERT INTO `user`( `name`, `email`, `phone`, `password`, `image`) VALUES ('$name','$email','$phone','$password','$image')";

   $query = mysqli_query($conn, $sql);

   if (mysqli_affected_rows($conn) > 0) {

      return true;
   } else {

      return false;
   }
}



function login($email, $password)
{

   include "connect_db.php";

   $sql = "SELECT * FROM `user` WHERE `email` = '$email'";

   $query = mysqli_query($conn, $sql);


   if (mysqli_num_rows($query) > 0) {

      $result = mysqli_fetch_assoc($query);

      return $result;
   } else {

      return false;
   }
}

function test_input($value)
{

   $data = trim($value);
   $data = stripslashes($value);
   $data = htmlspecialchars($value);
   return $data;
}

function hash_pass($password)
{

   $hashed_password = password_hash($password, PASSWORD_DEFAULT);
   return $hashed_password;
}

function show_data()
{

   include "connect_db.php";

   $sql = "SELECT * FROM `user` ";

   $query = mysqli_query($conn, $sql);

   $data = [];

   if (mysqli_num_rows($query) > 0) {

      while ($result = mysqli_fetch_assoc($query)) {

         $data[] = $result;
      }

      return $data;
   } else {

      return false;
   }
}


function userRole()
{

   return $_SESSION['username']['role_id'];
}


function delete($id)
{

   include "connect_db.php";

   $sql = "DELETE FROM `user` WHERE `id` = $id ";

   $query = mysqli_query($conn, $sql);

   if (mysqli_affected_rows($conn) > 0) {

      return true;
   } else {

      return false;
   }
}

function add_user($name, $email, $phone, $password, $image)
{

   include "connect_db.php";

   $sql = "INSERT INTO `user`( `name`, `email`, `phone`, `password`, `image`) VALUES ('$name','$email','$phone','$password','$image')";

   $query = mysqli_query($conn, $sql);

   if (mysqli_affected_rows($conn) > 0) {

      return true;
   } else {

      return false;
   }
}


function getUserById($id)
{

   if (isset($_GET['id'])) {

      include "connect_db.php";

      $id = $_GET['id'];

      $sql = "SELECT * FROM `user` WHERE `id` = $id";

      $query = mysqli_query($conn, $sql);

      if($data = mysqli_fetch_assoc($query)){

         return $data;
      }else{

         return false;
      }
    


      
   }
}

function update_user($name, $email, $phone, $hash_password, $image, $id)
{

   include "connect_db.php";

   $sql = "UPDATE `user` SET";

   if (!empty($name)) {
      $sql .= " `name` = '$name'";
   }
   if (!empty($email)) {
      $sql .= ",`email` = '$email'";
   }
   if (!empty($phone)) {
      $sql .= ",`phone` = '$phone'";
   }
   if (!empty($hash_password)) {
      $sql .= ",`password` = '$hash_password'";
   }
   if (!empty($image)) {
      $sql .= ",`image` = '$image'";
   }
   $sql .= " WHERE `id` = $id ";

   $query = mysqli_query($conn, $sql);

   if (mysqli_affected_rows($conn) > 0) {

      return true;
   } else {

      return false;
   }
}


