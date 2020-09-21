<?php
require_once ("Model.php");
require_once ("Voiture.php");
$pdo = Model::$pdo;
$rep = $pdo->query("SELECT * FROM voiture");
$rep->setFetchMode(PDO::FETCH_CLASS,"Voiture");
$tab_obj = $rep->fetchAll();
foreach ($tab_obj as $key => $obj){
    echo $obj->afficher();
}

