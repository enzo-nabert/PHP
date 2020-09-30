<?php
    require_once "Trajet.php";
    require_once "Utilisateur.php";

    $tab_utilisateurs = Trajet::getListUtilisateursTrajet(5);
    $tab_trajets = Utilisateur::getListeTrajet("log2");

    foreach ($tab_utilisateurs as $util){
        $util->afficher();
    }
    echo "<br>";
    foreach ($tab_trajets as $traj){
        $traj->afficher();
    }
