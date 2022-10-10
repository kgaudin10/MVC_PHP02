<?php
    require_once 'Model.PHP';
    require_once 'Trajet.PHP';

    Trajet::findPassager(2);

    if(!empty($_GET)){
        $id=$_GET['trajet'];
        echo "Voici l'id choisie :".$id.;
        trajet::findPassager($id);
    }
    else{
        echo"le formulaire n'a pas été rempli correctement."
    }
?>