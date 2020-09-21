<?php
require_once ("Model.php");
$pdo = Model::$pdo;
$rep = $pdo->query("SELECT * FROM voiture");
$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
foreach ($tab_obj as $key => $obj){
    echo "$obj->immatriculation , $obj->marque , $obj->couleur<br>";
}

