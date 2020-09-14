<!DOCTYPE html>
<html>
<head>
	<title>exercice 5</title>
</head>
<body>
	<?php 
	// $immatriculation="256AB34";
	// $marque="Renault";
	// $couleur="bleu";
	// echo "Voiture $immatriculation de marque $marque (couleur $couleur)";
	
	$voiture = array(
		'immatriculation' => '256AB34' ,
		'marque' => 'Renault',
		'couleur' => 'bleu'
	);
	echo "Voiture {$voiture['immatriculation']} de marque {$voiture['marque']} (couleur {$voiture['couleur']})";
	?>
</body>
</html>