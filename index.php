<?php require_once('global/php/db_connection.php'); ?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="global/css/layout.css" />
    <title>PHP Website</title>
</head>
<body>
<header>
    <div class="wrapper">
        <div class="logo">
            <img src="global/imgs/header_logo.png" alt="Header" />
        </div>
        <nav class="menubar navigation">
            <ul>
                <li data-action="home" class="selected">Home</li>
                <li data-action="dashboard">Dashboard</li>
                <li data-action="about">About</li>
            </ul>
        </nav>
        <nav class="menubar user">
            <ul>
                <?php
                    if(isset($_SESSION['user'])) {
                ?>
                <li><?php echo $_SESSION['user']['username']; ?> profile</li>
                <li>Logout</li>
                <?php
                    } else {
                ?>
                <li>Login</li>
                <li>Register</li>
                <?php
                    }
                ?>
            </ul>
        </nav>
    </div>
</header>



<script type="text/javascript" src="global/js/jquery.js"></script>
<script type="text/javascript" src="global/js/global.js"></script>
</body>
</html>