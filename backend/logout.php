<?php require_once('../global/php/user_session.php');
session_destroy();
header('Location: http://localhost/PHP_Website');
?>