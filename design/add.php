
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
            <form action="add_user.php" method="post" enctype="multipart/form-data" >
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="enter your name" name="name" autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="enter your email" name="email" autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mobile</label>
                    <input type="tel" class="form-control"  placeholder="enter your phone number" name="phone"
                        autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control"  placeholder="password" name="password" autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control"   placeholder="password" name="img" autocomplete="false">
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