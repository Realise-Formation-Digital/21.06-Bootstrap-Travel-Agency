<?php
if (isset($_POST['submit']))
{
    //collection de donnés
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];
    if (empty($name) || empty($email) || empty($tel) || empty($message))
    {
        //if empty display it
        $greska = 'Merci de remplire tous les champs avec *';
        //if not empty display it
    }
    else
    {
        $konfirmacija = " " . $name . ", merci pour votre message, nous vous répondrons dans les plus brefs délais";
    }
    //set the data of the CSV
    $Content .= "$name; $email; $tel; $message\n";
    # set the file name and create CSV file
    $FileName = "messages.csv";
    // Écrit le résultat dans le fichier
    file_put_contents($FileName, $Content, FILE_APPEND | LOCK_EX);
}