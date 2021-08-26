<?php
   // Vérifier si le formulaire est soumis 
   if ( isset( $_POST['nom'] ) && isset( $_POST['mail'] ) && isset( $_POST['password'] ) && isset( $_POST['rpassword'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $nom = $_POST['nom']; 
     $mail = $_POST['mail']; 
     $password = $_POST['password'];
     $rpassword = $_POST['rpassword'];
     $hashedpassword = md5($password);

     if (empty($nom) || empty($mail) || empty($password) || empty($rpassword)) {
        
      $error = 'Merci de remplire tous les champs';
      //return true;
      } else {

          $confirmation = " " . $nom . ", merci";
      }

     // afficher le résultat
     echo '<h3>Informations récupérées en utilisant POST</h3>'; 
     echo 'Nom : ' . $nom . ' Mail : ' . $mail . ' Password : ' . md5($password) . ' Rpassword : ' . md5($rpassword); 
       $Content .= "$nom; $mail; $hashedpassword; $rpassword\n";
       $FileName = "users.csv";
      file_put_contents($FileName, $Content, FILE_APPEND | LOCK_EX);
     exit;
  }
