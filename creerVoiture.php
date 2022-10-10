<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Dans le formulaire précédent, vous avez fourni les
        informations suivantes :</p>
        
        <?php
            echo 'id : '.$_POST["immat_id"].'<br>';
            echo 'Marque : ' .$_POST["marque_id"].'<br>';
            echo 'Couleur : ' .$_POST["couleur_id"].'<br>';
        ?>
    </body>
</html>