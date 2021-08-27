<?php

<<<<<<< Updated upstream
//echo md5('dava1234');


$name = trim($_POST["email"]);
if (preg_match("/^[a-zA-Z-' ]*$/",$name)) {
 // echo "please try again";
}
=======

>>>>>>> Stashed changes

if (isset($_POST['email1']) && isset($_POST['password1'])) {
 
  $password1=$_POST['password1'];
  $email=$_POST['email1'];

<<<<<<< Updated upstream
    if(empty($email))
    {
    $error = "sorry, you must enter your email";
    }
    elseif (is_numeric($email))
    {
    die("sorry, email must containing alphabet");
    }

    $ok = false;
    $row = 1;
    // Vérifie si le fichier users.csv existe et l'ouvre en mode lecture.
    if (($handle = fopen("users.csv", "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        for ($c=0; $c < $num; $c++) {
          // fichier si l'email et password egal
          $ligneaverifier = $_POST['email1'] . ';' . $_POST['password1'] . ';';
          if ($ligneaverifier == $data[$c]) {
            $ok = true;
          }
        }
      }
      fclose($handle);
    } else {
      $error = "Fichier users.csv non trouvé";
    }



    // Ouvrir le fichier users.csv
    /*
    $CSVfp = fopen("users.csv", "r");
    $_rows= count(file("users.csv", "r"))
    'email1'=>$email1
    'password1'=>$password1
    */

    // Vérifier dedans

}

    
    
=======
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
>>>>>>> Stashed changes
