<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php  
	$prenom="Helmut";
	echo <<< EOT
Texte à afficher
sur plusieurs lignes
avec caractères spéciaux \t \n
 et remplacement de variables $prenom
les caractères suivants passent : " ' $ / \ ;
EOT;
	?>
</body>
</html>