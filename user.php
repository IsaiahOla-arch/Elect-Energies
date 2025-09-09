<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'connected.php';
    
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO crud (username, phone, email, password)
    VALUES ('$username', '$phone', '$email', '$password')";

    $result = mysqli_query($con, $sql);
    if($result){
        header('location:display.php');
    } else {
        echo "Error: " . mysqli_error($con);
    }


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container">
        <form action="user.php" method="post" style="padding-left: 20px; padding-top: 20px; padding-right: 20px; padding-bottom: 20px;">
        <div class="mb-3">
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter username" autocomplete="off" required>

        </div>
        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="tel" class="form-control" name="phone" placeholder="Enter phone number" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter password" autocomplete="off" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>