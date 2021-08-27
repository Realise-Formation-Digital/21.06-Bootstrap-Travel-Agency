<?php

//echo md5('dava1234');


$name = trim($_POST["email"]);
if (preg_match("/^[a-zA-Z-' ]*$/",$name)) {
 // echo "please try again";
}

if (isset($_POST['email1']) && isset($_POST['password1'])) {
   // echo ("Dawit");
   /*
   $_SESSION['email1'] =$_POST['email1'];
   $_SESSION['password1'] =$_POST['password1'];
   */
  $password1=$_POST['password1'];
  $email=$_POST['email1'];

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

    
    