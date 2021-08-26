<?PHP


session_start();
$_SESSION['username']="FRED";


if (!(isset($_SESSION['username']))) {
    $errorsession = 'Vous n\'êtes pas connecter, <br> <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
Login </button>';
} else {
    $edintext = "<html><body><center><table>\n\n";
  
    $file = fopen("messages.csv", "r");
    while (($data = fgetcsv($file, 0, ';')) !== false) {
        $edintext .= "<tr>";
        foreach ($data as $i) {
            $edintext .= "<td>" . ($i) 
                . "</td>";
        }
        $edintext .= "</tr> \n";
        
    }

    // Closing the file
    fclose($file);

    $edintext .= "\n</table></center></body></html>";
}




?>


<?php include_once("headerrr.php"); ?>

<body>

    <!--Section Hero -->
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4 text-center">Message.csv</h1>
            <p style="color:red;text-align: center;"><?php echo $errorsession ?></p>
            <p class="lead text-center">


            <?php echo $edintext

        ?>



            </p>
           
        </div>
    </div>

<?php include_once("footerrr.php"); ?>