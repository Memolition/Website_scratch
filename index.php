<?php require_once('global/php/user_session.php'); require_once('global/php/db_connection.php'); ?>
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
                <li data-action="profile"><?php echo $_SESSION['user']['username']; ?> profile</li>
                <li data-action="logout">Logout</li>
                <?php
                    } else {
                ?>
                <li data-action="login">Login</a></li>
                <li data-action="register">Register</li>
                <?php
                    }
                ?>
            </ul>
        </nav>
    </div>
</header>

<div id="shader">
    <div id="loginPopup" class="popup">
        <form action="backend/login.php">
            <fieldset>
                <legend>Login</legend>
                <input type="text" placeholder="Username" name="username" />
                <input type="password" placeholder="Password" name="password" />
                <input type="submit" value="Login" />
            </fieldset>
        </form>
    </div>
    <div id="registerPopup" class="popup">
        <form action="backend/register.php">
            <fieldset>
                <legend>Login</legend>
                <input type="text" placeholder="Username" name="username" />
                <input type="text" placeholder="First Name" name="fname" />
                <input type="text" placeholder="Last Name" name="lname" />
                <input type="password" placeholder="Password" name="password" />
                <input type="password" placeholder="Confirm Password" name="conf_password" />
                <input type="submit" value="Register" />
            </fieldset>
        </form>
    </div>
</div>
<pre>
<?php
    print_r($_SESSION['user']);
?>
</pre>

<script type="text/javascript" src="global/js/jquery.js"></script>
<script type="text/javascript" src="global/js/global.js"></script>
</body>
</html>