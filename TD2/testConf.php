<!DOCTYPE html>
<html>
<head>
    <title>conf</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        // On inclut les fichiers de classe PHP avec require_once
        // pour éviter qu'ils soient inclus plusieurs fois
        require_once 'Conf.php';

        // On affiche le login de la base de donnees
        echo Conf::getLogin();
    ?>
</body>
</html>
