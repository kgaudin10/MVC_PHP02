<?php
require_once 'Model.php';
require_once 'voiture.php';

$rep = Model::$PDO->query('SELECT * FROM voiture');
$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ)

$rep->setFetchAll(PDO::FETCH_CLASS, 'voiture');
$tab_voit = $rep->fetchAll();
echo $tab_voit::getVoitureByImmat();
echo voiture::save();
?>