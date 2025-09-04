<?php
$user = 0;
$success = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include ('connect.php');

    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT email FROM register WHERE email = '$email'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);

    if($num>0){
        $user = 1;
        $_SESSION['status'] = "Email ID already exists";
        header('locaion:signup.php');

    }else{
        $sql = "INSERT INTO register (username, phone, email, password) 
        VALUES('$username', '$phone', '$email', '$password')";
        $result = mysqli_query($con, $sql);

        if($result){
            $success = 1;
            $_SESSION['status'] = "Registration Successful!!";
            header('location:login.php');
        }else{
            $_SESSION['status'] = "Registration Failed!!";
            header('location:signup.php');
        }
    }

}

?>