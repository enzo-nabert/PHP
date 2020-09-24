<?php
require_once ("Model.php");
require_once ("Voiture.php");
$v1 = new Voiture("AA112AA","renault","verte");
$v1->save();
$tabVoit = Voiture::getAllVoitures();
foreach ($tabVoit as $voit){
    $voit->afficher();
}

