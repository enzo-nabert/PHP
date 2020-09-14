<!DOCTYPE html>
<html>
<head>
	<title>exercice 5</title>
</head>
<body>
	<?php 

	//5.1
	// $immatriculation="256AB34";
	// $marque="Renault";
	// $couleur="bleu";
	// echo "Voiture $immatriculation de marque $marque (couleur $couleur)";
	
	//5.2
	// $voiture = array(
	// 	'immatriculation' => '256AB34' ,
	// 	'marque' => 'Renault',
	// 	'couleur' => 'bleu'
	// );
	// echo "Voiture {$voiture['immatriculation']} de marque {$voiture['marque']} (couleur {$voiture['couleur']})";

	//5.3
	$voiture = array();
	for ($i=0; $i < 30; $i++) { 
		$voiture[] = array(
			'immatriculation' => 'AB ' . $i,
			'marque' => 'Peugeot',
			'couleur' => 'rouge'
		);
	}
	$len = count($voiture);
	if ($len != 0){
		$str = "Liste de voiture: \n <ul>";

		for ($i=0; $i < count($voiture); $i++) { 
			$str .= "<li>";
			foreach ($voiture[$i] as $key => $value) {
				if ($key != 'couleur') {
					$str  .= "$key : $value , ";
				}else{
					$str  .= "$key : $value";
				}
				
			}
			$str .= "\n";
		}
	}else{
		$str = "Il n'y a aucune voiture";
	}
	

	echo $str;

	
		
	?>
</body>
</html>