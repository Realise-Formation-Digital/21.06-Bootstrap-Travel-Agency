<?php
if(isset($_POST['submit'])){

    //collection de donnés
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];

        # Title of the CSV
        
        $Content = "Nom, E-mail, Téléphone, Message\n";

        //set the data of the CSV
        $Content .= "$name; $email; $tel; $message\n";

        # set the file name and create CSV file
        //$FileName = "messages".date("d-m-y-h:i:s").".csv";
        $FileName = "messages.csv";

        // Écrit le résultat dans le fichier
        //file_put_contents($FileName, $FileName);
        file_put_contents($FileName, $Content, FILE_APPEND | LOCK_EX);


        mail($name,$email,$tel,$message); // sends a copy of the message to the sender
        echo " " . $name . ", merci pour votre message, nous vous répondrons dans les plus brefs délais";
        // You can also use header('Location: thank_you.php'); to redirect to another page


        

        //header('Content-Type: application/csv'); 
        //header('Content-Disposition: attachment; filename="' . $FileName . '"'); 
        //echo $Content;
        //exit();
    
}
//ako imas greske



?> 
<!--
<form action='' method='post'>
<p><label>Name</label><br><input type='text' name='name' value=''></p> 
<p><label>Email</label><br><input type='text' name='email' value=''></p> 
<p><input type='submit' name='submit' value='Submit'></p> 
</form>

!-->