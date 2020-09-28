<?php
    require_once "Trajet.php";
    require_once "Utilisateur.php";
    $tab_trajet = Utilisateur::findTrajets($_GET['login']);
    foreach ($tab_trajet as $obj){
        $obj->afficher();
    }