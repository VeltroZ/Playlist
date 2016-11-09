<?php
$iddelet = $_GET["id"];


        $servername = "localhost";
        $username = "playlist";
        $password = "123";
        $dbname = "playlist";

        
        $conn = new mysqli($servername, $username, $password, $dbname);
       
        if ($conn->connect_error) 
            {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = 'DELETE FROM pistes WHERE id='.$iddelet;
            //echo $sql;
           
            if ($conn->query($sql) === TRUE) 
                    {
                    echo "Suppresion reussi !";
                    } 
                        else 
                           {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                           }



header('Location: index.php'); 
?>