<?php
   session_start();
   unset($_SESSION["email1"]);
   unset($_SESSION["password1"]);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = login.php');
?>