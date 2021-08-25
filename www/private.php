<?php include_once("headerrr.php"); ?>

<body>

    <!--Section Hero -->



    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4 text-center">Message.csv</h1>
            <p class="lead text-center">


            <?php
        echo "<html><body><center><table>\n\n";
  
        // Open a file
        $file = fopen("messages.csv", "r");
  
        // Fetching data from csv file row by row
        while (($data = fgetcsv($file, 0, ';')) !== false) {
            
  
            // HTML tag for placing in row format
            echo "<tr>";
            foreach ($data as $i) {
                echo "<td>" . ($i) 
                    . "</td>";
            }
            echo "</tr> \n";
            
        }
  
        // Closing the file
        fclose($file);
  
        echo "\n</table></center></body></html>";
        ?>



            </p>
           
        </div>
    </div>

<?php include_once("footerrr.php"); ?>