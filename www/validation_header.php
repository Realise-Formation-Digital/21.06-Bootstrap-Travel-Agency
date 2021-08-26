<?php

//echo md5('dava1234');

print_r($_POST);
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
    if (($handle = fopen("users.csv", "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        for ($c=0; $c < $num; $c++) {
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
    var_dump ($ok);
    die('dawit');



    // Ouvrir le fichier users.csv
    /*
    $CSVfp = fopen("users.csv", "r");
    $_rows= count(file("users.csv", "r"))
    'email1'=>$email1
    'password1'=>$password1
    */

    // Vérifier dedans

}

    
    