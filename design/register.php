
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="design/style.css">
</head>
<body>
    <div class="container">
        <form action="register.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:" value="<?php echo $name; ?>">
                <span class="error"><?php echo $name_error; ?></span>
            </div>
            <div class="form-group">
                <input type="emamil" class="form-control" name="email" placeholder="Email:" value="<?php echo $email; ?>">
                <span class="error"><?php echo $email_error; ?></span>
            </div>
            <div class="form-group">
                <input type="phone" class="form-control" name="phone" placeholder="Phone:" value="<?php echo $phone; ?>">
                <span class="error"><?php echo $phone_error; ?></span>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:" value="<?php echo $password; ?>">
                <span class="error"><?php echo $password_error; ?></span>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:" value="<?php echo $repeated_password; ?>">
                <span class="error"><?php echo $repeated_password_error; ?></span>
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="img" placeholder="Choose Your Image:" >
                <span class="error"><?php echo $image_error; ?></span>
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" name="submit">
            </div>
        </form>
        <div>
        <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
      </div>
    </div>
</body>
</html>