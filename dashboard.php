<!-- <?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Energy Portal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/02d6d643b3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
    <!-- Bootstrap Icons CDN for modern icons -->
    <link rel="icon" href="log.png" type="image/png">
</head>
<body>
    <div class="web">
        <nav>
            <img src="gpt-whi.png">
            <h1>
                Elect Energy <span style="color: #ffd600;">Dashboard</span>
            </h1>
            <main>&nbsp;Welcome to your energy management portal.</main>
        </nav>
         <div class="welcome">
            <div class="sub1">User</div>
            <h1>
                Welcome,<span style="color: #ffd600;">&nbsp;<?php echo $_SESSION['username'];?>&nbsp;<i class="bi bi-lightning-charge-fill" style="color:#ffd600; vertical-align:middle; font-size: 1.5rem;"></i></span>
            </h1>

            <div class="sub">Access your energy management tools and daily tasks below</div>

            <div class="make">
                <div class="audi"><i class="bi bi-clipboard-data-fill fs-5"></i>&nbsp;Make Audit</div>
                <div class="write">Submit system performance audits and review previous reports.</div>
                <a href="#"><button>Start Audit</button></a>
            </div>
            <div class="make1">
                <div class="audi"><i class="bi bi-envelope-paper-fill fs-5"></i>&nbsp;Submit a Request</div>
                <div class="write">Submit requests for assistance or report issues.</div>
                <a href="#"><button>Submit Request</button></a>
            </div>
            <div class="make2">
                <div class="audi"><i class="bi bi-calendar-check-fill fs-5"></i>&nbsp;Daily Routine</div>
                <div class="write">Log your work activities for today and upload supporting files.</div>
                <a href="#"><button>Submit Routine</button></a>
            </div>
         </div>
         <div class="side-bar">
            <main>Energy Portal</main>
            <div class="name"><?php echo $_SESSION['username'];?></div>
            <button class="dashboard" type="submit"><i class="bi bi-house-door-fill" style="font-size: 1.4rem;"></i>&nbsp; Dashboard</button>
            <a href="#">
                <div class="audit">
                    <div class="per"><i class="bi bi-clipboard-data-fill fs-4"></i>Make Periodic</div>
                    <div class="aud">Audit</div>
                </div>
            </a>
            <a href="#">
                <div class="request">
                    <div class="sum"><i class="bi bi-envelope-paper-fill fs-4"></i>Submit a</div>
                    <div class="req">Request</div>
                </div>
            </a>
            <a href="#">
                <div class="routine">
                    <div class="daily"><i class="bi bi-calendar-check-fill fs-4"></i>Submit Daily</div>
                    <div class="rout">Routine</div>
                </div>
            </a>
         </div>
        <div class="extra">
            <a href="login.php" style="text-decoration: none;">
                <div class="logout"><i class="bi bi-box-arrow-right fs-4"></i>Logout</div>
            </a>
        </div>
    </div>
    <footer class="footer-bar">
        <div class="container text-center">
            &copy; 2025 Elect Energy. All rights reserved. |
            <span style="font-size:1rem;">Need help? <a target="_blank" href="mailto:temiloluwaoladimeji70@gmail.com">Contact Support</a></span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>