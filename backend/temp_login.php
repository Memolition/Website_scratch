<?php require_once('../global/php/user_session.php');
    $_SESSION['user'] = array(
        username => "Ryan"
    );
    header("Location: http://localhost/PHP_Website/");
?>