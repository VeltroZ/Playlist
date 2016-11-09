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

<A HREF="add.php">
<button id="button">Ajouter une piste</button>
</A>

</nav>







<div>
<ul style="text-align: center;">


<?php
    
        function add()
            {
                $nb = 1;
                while ($nb<250)
                
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=playlist', 'playlist', '123');
                        $reponse = $bdd->query('SELECT * FROM `pistes` WHERE id ='.$nb);
                        $result = $reponse->fetch();
                        


                      if ($result[1] != NULL)
                                {
                                echo '<li class="content">';
                                echo '<img src=uploads/';
                                echo $result[5];
                                echo ' ';
                                echo 'height="75" width="75">';
                                echo '<br>';
                                echo 'Titre = ';
                                echo $result[1];
                                echo '<br>';
                                echo ' Durée = ';
                                echo $result[2];
                                echo '<br>';
                                echo ' Année de sortie = ';
                                echo $result[3];
                                echo '<br>';
                                echo ' Artiste = ';
                                echo $result[4];
                                echo '<br>';
                                echo '<A HREF="https://www.youtube.com/results?search_query=';
                                echo $result[1];
                                echo '">youtube</A>';
                                echo '<br>';
                                echo '<A HREF="supp.php?id=';
                                echo  $nb;
                                echo  '">supprimer</A>';
                                echo '<br>';
                                echo '<A HREF="upload.php?id=';
                                echo  $nb;
                                echo  '">Ajouter une Jacket</A>';
                                echo '<br>';
                                echo '<br>';
                                
                                }
                                $nb++;
                               
                    }
               
            }
            

    add();  
    
?>



</ul>
</div>

</body>
</html>

