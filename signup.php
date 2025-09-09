<?php
    include ('code.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <nav>
        <img src="gpt-whi.png">
        <h1>
            Sign Up to Elect Energy
        </h1>
        <main>Welcome to your energy management portal.</main>
    </nav>
    <form action="code.php" method="POST">
        <div class="head">Sign Up</div>
        <?php
            if($user){
                echo '<div class="alert alert-danger" role="alert">Username or Email already exists!</div>';
            }else if($success){
                echo '<div class="alert alert-success" role="alert">Registration successful! You can now log in.</div>';
            }        
        ?>
        <div class="name">
            <label>Username</label>
            <input type="text" placeholder="username" required name="username">
        </div>
        <div class="name">
            <label>Phone No</label>
            <input type="tel" placeholder="" required pattern="[0-9]{10}" name="phone">
        </div>
        <div class="name">
            <label>Email address</label>
            <input type="email" placeholder="e.g. john@example.com" required name="email">
        </div>
        <div class="name1">
            <label>Password</label>
            <input type="password" placeholder="Enter your password" required name="password">
        </div>
        <button class="log-btn" id="formSubmitBtn" type="submit">
            <span class="spinner-border spinner-border-sm d-none" id="formSpinner" role="status" aria-hidden="true"></span>
            <span id="formBtnText">Sign Up</span>
        </button>

        
        <div class="forgot">
            <div><a class="forgot" href="#">Forgot Password?</a></div>
            <div><a class="acc" href="login.php">Already have an account? <strong>Login</strong></a></div>
            <button class="home"><a href="index.html">&larr;&nbsp;Back to Home</a></button>
    </form>
    <script>
    const form = document.querySelector("form");
    const submitBtn = document.getElementById("formSubmitBtn");
    const spinner = document.getElementById("formSpinner");
    const btnText = document.getElementById("formBtnText");

    form.addEventListener("submit", function () {
        btnText.textContent = "Signing Up...";
        spinner.classList.remove("d-none");
        submitBtn.disabled = true;
    });
    </script>
</body>
</html>