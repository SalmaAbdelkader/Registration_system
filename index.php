<?php 

session_start();

include "db_sql.php";


if(empty($_SESSION['username'])){

    header("location: login.php");
}

$userrole = userRole();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="design/css/bootstrap.min.css">
  <link rel="stylesheet" href="design/css/toster.css">
  <title>Users App</title>
</head>

<body>
  <div class="container">
    <div class="wrapper p-5 m-5">
      <div class="d-flex p-2 justify-content-between mb-2">
        <h2>All users</h2>
        <?php  if($userrole == 1):?>
        <div>
          <a href="add_user.php"><i data-feather="user-plus"></i></a>
        </div>
        <?php endif; ?>
      </div>
      <hr>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <?php  if($userrole == 1):?>
            <th scope="col">Action</th>
            <?php endif; ?>
          </tr>
        </thead>
        <tbody>
          
               <?php
                     
                     $data = show_data();
                     $id = 0;
                   foreach($data as $user):
               
               ?>
          
            <tr>

              <td><?php echo $id++; ?></td>
              <td>
                  <?php
                        if(isset($user['image'])){
                    ?>
                         <img src="images/<?php echo $user['image'] ?>" width="100px" height="100px">
                       
                  <?php
                        }else{
                    ?>
                        <img src="images/person.jpg" width="100px" height="100px">
                  <?php

                        }
                  ?>

                </td>
              <td><?php echo $user['name'] ?></td>
              <td><?php echo $user['email'] ?></td>
              <td><?php echo $user['phone'] ?></td>
              <?php  if($userrole == 1):?>
              <td>
                <div class="d-flex p-2 justify-content-evenly mb-2">
                  <a href="delete_user.php?id=<?php echo $user['id']; ?>"><i onclick="confirm_delete(<?php echo $user['id']; ?>);" class="text-danger" data-feather="trash-2"></i></a>
                  <a href="update_user.php?id=<?php echo $user['id']; ?>"><i onclick="edit(<?php  echo $user['id']; ?>);" class="text-success" data-feather="edit"></i></a>
                </div>
              </td>
              <?php   endif ?>
            </tr>

            <?php 
                   endforeach;

            ?>
        

          

        </tbody>
      </table>
    </div>

  </div>
  <script src="design/js/jq.js"></script>
  <script src="design/js/bootstrap.min.js"></script>
  <script src="design/js/icons.js"></script>
  <script src="design/js/toster.js"></script>
  <script src="design/js/main.js"></script>
  <?php
//   if ($action != false) {
//     if ($action == 'add') { ?>
      <script>
//         show_add()
//       </script>


      <?php
//     }
//     if ($action == 'del') { ?>
       <script>
//         show_del()
//       </script>


      <?php
//     }
//     if ($action == 'edit') { ?>
      <script>
//         show_update()
//       </script>


       <?php
//     }
//   }
  ?>
  <script>
    feather.replace();
  </script>
</body>

</html>