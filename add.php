<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>My playlist</title>
</head>

<body>
<header>Appilcation "Ton mix"</header>




<nav>
<A HREF="index.php">
<button id="button">Retour</button>
</A>
</nav>


<div id="add">
<form action="add.php" method="post" id="add">
    <p>Titre : <input type="text" name="Titre" /></p>
    <p>Durée (ex : 2.44) : <input type="text" name="durée" /></p>
    <p>Artiste : <input type="text" name="Artiste" /></p>
    <p>Année de sorie : <input type="text" name="Année" /></p>
    <p><input type="submit" value="OK" id="buttonOk"></p>
</form>
</div>




<?php
        $servername = "localhost";
        $username = "playlist";
        $password = "123";
        $dbname = "playlist";

        
        $conn = new mysqli($servername, $username, $password, $dbname);
       
        if ($conn->connect_error) 
            {
            die("Connection failed: " . $conn->connect_error);
            }

                if (isset($_POST["Titre"])) 
                    {
                        $Titre = $_POST["Titre"];
                        $Artiste = $_POST["Artiste"];
                        $Année = $_POST["Année"];
                        $durée = $_POST["durée"];


                        $sql = "INSERT INTO pistes (Title, Duration, Years, Artiste)
                        VALUES ('$Titre', '$durée', '$Année', '$Artiste')";

               
                

                if ($conn->query($sql) === TRUE) 
                    {
                    header('Location: index.php');
                    } 
                        else 
                           {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                           }

                $conn->close();
            }
           
            
?>



</body>

</html>