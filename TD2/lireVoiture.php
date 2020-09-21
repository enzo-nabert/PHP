<?php
require_once ("Model.php");
require_once ("Voiture.php");
$tab_voit = Voiture::getAllVoitures();
foreach ($tab_voit as $key => $obj){
    echo $obj->afficher();
}

