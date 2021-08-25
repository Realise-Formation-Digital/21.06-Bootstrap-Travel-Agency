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
     // afficher le résultat
     echo '<h3>Informations récupérées en utilisant GET</h3>'; 
     echo 'Nom : ' . $nom . ' Mail : ' . $mail . ' Password : ' . $password . 'Rpassword : ' . $rpassword; 
     exit;
  }
    // Vérifier si le formulaire est soumis 
    if ( isset( $_POST['submit'] ) ) {
      /* récupérer les données du formulaire en utilisant 
         la valeur des attributs name comme clé 
        */
      $nom = $_POST['nom']; 
      $mail = $_POST['mail']; 
      $password = $_POST['password'];
      $rpassword = $_POST['rpassword'];
      // afficher le résultat
      echo '<h3>Informations récupérées en utilisant POST</h3>'; 
      echo 'Nom : ' . $nom . ' Mail : ' . $mail . ' Password : ' . $password . 'Rpassword : ' . $rpassword; 
      exit;
   }
?>