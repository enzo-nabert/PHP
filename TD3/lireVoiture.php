<?php
require_once ("Model.php");
require_once ("Voiture.php");
echo Voiture::getVoitureByImmat("AB123CD")->afficher();

