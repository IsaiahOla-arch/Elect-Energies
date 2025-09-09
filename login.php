<?php
session_start(); 
$failure = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('connect.php');

    $email = trim($_POST['email']);
    $password = $_POST['password'];

$stmt = $con->prepare("SELECT username, password FROM register WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($db_username, $db_password);
    $stmt->fetch();

    if ($password === $db_password || password_verify($password, $db_password)) {
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $db_username; // ✅ save username too
        header("Location: dashboard.php");
        exit;
    } else {
        $failure = 1;
    }
}
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="login.css">
  <style>
    /* Fullscreen overlay */
    #spinner-overlay {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(255,255,255,0.6);
      backdrop-filter: blur(6px);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    /* Spinner itself */
    .spinner-border {
      width: 4rem;
      height: 4rem;
      color: #007bff;
    }
  </style>
</head>
<body>
  <nav>
    <img src="gpt-whi.png" width="50px" alt="Logo">
    <h1>Login to Elect Energy</h1>
    <main>Welcome to your energy management portal.</main>
  </nav>

  <form id="loginForm" action="login.php" method="POST">
    <div class="head">Login</div>
    <?php if ($failure): ?>
      <div class="alert alert-danger" role="alert">
        Invalid email or password!
      </div>
    <?php endif; ?>
    
    <div class="name">
      <label>Email address</label>
      <input type="email" placeholder="e.g. john@example.com" required name="email">
    </div>
    <div class="name1">
      <label>Password</label>
      <input type="password" placeholder="Enter your password" required name="password">
    </div>
    <button type="submit" class="log-btn">Login</button>

    <div class="forgot">
      <div><a class="forgot" href="#">Forgot Password?</a></div>
      <div><a class="acc" href="signup.php">Don't have an account? <strong>Sign Up</strong></a></div>
      <a href="index.html" style="margin-left: 50px;" class="btn btn-secondary">&larr; Back to Home</a>
    </div>
  </form>

  <!-- Spinner Overlay -->
  <div id="spinner-overlay">
    <div class="spinner-border" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  
  <script>
    const form = document.getElementById('loginForm');
    const spinner = document.getElementById('spinner-overlay');

    form.addEventListener('submit', function() {
      spinner.style.display = 'flex'; // Show spinner
    });
  </script>
  
</body>
</html>
