<?php


if (isset($_POST['email1']) && isset($_POST['password1'])) {
 
  $password1=$_POST['password1'];
  $email=$_POST['email1'];

  if(empty($email))    {
    $error = "sorry, you must enter your email";
  }

  // Vérifie si le mot de passe est vide.
  if(empty($password1))    {
    $error = "sorry, you must enter your password";
  }

  // Vérifie si le fichier users.csv existe et l'ouvre en mode lecture
  $connecte = false;
  if (($handle = fopen("users.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
      if ($data[0] == $email && $data[1] == $password1) {
        $connecte = true; {
          $error = "we are connected"; 
        }
      }
    }
  } else {
    $error = "sorry, file not exist";
  }

  if ($connecte) {
    session_start();
    $_SESSION['email'] = $email;
    header("Location: private.php");
  } else {
    $error = "user or password not found";
  }

}




/*
session_start();
unset($_SESSION['email']);
*/