<?php
  $mysqli = new mysqli("localhost", "php_user", "", "php_website")  ;
  if($mysqli->connect_errno) {
      echo "DB Connection failed./n/r";
  }
?>