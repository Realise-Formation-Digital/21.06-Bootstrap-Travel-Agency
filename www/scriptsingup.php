<?php
   // Vérifier si le formulaire est soumis 
   if ( isset( $_GET['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $nom = $_GET['nom']; 
     $mail = $_GET['mail']; 
     $password = $_GET['password'];
     $rpassword = $_GET['rpassword'];
     $hashedpassword = md5($password);
     // afficher le résultat
     echo '<h3>Informations récupérées en utilisant GET</h3>'; 
     echo 'Nom : ' . $nom . ' Mail : ' . $mail . ' Password : ' . md5($password) . ' Rpassword : ' . md5($rpassword); 
       $Content .= "$nom; $mail; $hashedpassword; $rpassword\n";
       $FileName = "users.csv";
      file_put_contents($FileName, $Content, FILE_APPEND | LOCK_EX);
     exit;
  }