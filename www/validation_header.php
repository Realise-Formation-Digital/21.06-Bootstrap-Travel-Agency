<?php

//echo md5('dava1234');

/*
$name = trim($_POST["email"]);
if (preg_match("/^[a-zA-Z-' ]*$/",$name)) {
 echo "please try again";

*/


if (isset($_POST['email1']) && isset($_POST['password1'])) {
   // echo ("Dawit");
   /*
   $_SESSION['email1'] =$_POST['email1'];
   $_SESSION['password1'] =$_POST['password1'];
   */
  $password1=$_POST['password1'];
  $email=$_POST['email1'];

    if(empty($email))    {
    $error = "sorry, you must enter your email";
    } 
    if(empty($password1))    {
      $error = "sorry, you must enter your password";
      }


      // reade file
      $path = 'users.csv';

if (file_exists($path)) {
    $contents = file_get_contents($path);
    $contents = explode("\n", $contents);

    $users = array();

    foreach ($contents as $value) {
        $user = explode(';', $value);
        $passs = explode(';', $value);
        $users[$user[0]] = $user[1];
        $pass[$passs[2]] = $passs[3];
    }

    if (isset($users[$_POST['email']]) && ($pass[$_POST['password1']])) {
        // User exists!
        $userexite = "User existe !!!!!!!!!!!!!!!!";
    } else {
      echo "marche pas";
    }
}



/*
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

  */
  
    

    // Ouvrir le fichier users.csv

    // Vérifier dedans

}
