<?php

require_once "./db_sql.php";
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $data = getUserById($id);

}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/css/bootstrap.min.css">
    <title>Users App</title>
</head>

<body>
    <div class="container">
        <div class="wrapper p-5 m-5">
            <div class="d-flex p-2 justify-content-between">
                <h2> user</h2>
                <div><a href="index.php"><i data-feather="corner-down-left"></i></a></div>
            </div>


            <form action="update_user.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" value="<?php echo $data['name']; ?>" placeholder="enter your name" name="name" autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" value="<?php echo $data['email']; ?>" placeholder="enter your email" name="email" autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mobile</label>
                    <input type="tel" class="form-control" value="<?php echo $data['phone']; ?>" placeholder="enter your phone number" name="phone" autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" value="<?php echo $data['password']; ?>" placeholder="password" name="password" autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <img src="images/<?php echo $data['image']; ?>" alt="" height="70px" width="70px">
                    <input type="file" class="form-control" value="images/<?php echo $data['image']; ?>" placeholder="password" name="img" autocomplete="false">
                </div>
                <div>

                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                </div>
                <div>

                    <input type="hidden" name="old_image" value="<?php echo $data['image']; ?>">
                </div>


                <div class="form-btn">
                    <input type="submit" class="btn btn-primary" name="submit">
                </div>
            </form>
        </div>

    </div>

    <script src="design/js/bootstrap.min.js"></script>
    <script src="design/js/icons.js"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>