<?php
    
   session_start();
   //($_SESSION["email1"]);
   //($_SESSION["password1"]);
   $session->setFlash('success' , 'Vous êtes maintenant connecté');
   App::redirect('logout.php');
}else{
   $session->setFlash('danger', 'Identifiant ou mot de passe incorrecte');
   echo 'You have cleaned session';
   header('Refresh: 2; URL = login.php');
?>