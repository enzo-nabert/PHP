<?php
    require_once 'Trajet.php';
    require_once 'Utilisateur.php';
    $tab_passagers = Trajet::findPassagers($_GET['id']);
    foreach ($tab_passagers as $obj) {
        $obj->afficher();
    }