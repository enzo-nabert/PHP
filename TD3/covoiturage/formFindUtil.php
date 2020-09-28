<!DOCTYPE html>
<html>
    <head>
        <title>form find util</title>
    </head>
    <body>
        <form method="get" action="testFindUtil.php">
            <fieldset>
                <legend>Formulaire</legend>
                <p>
                    <label for="id-trajet">Identifiant</label>
                    <input type="text" name = "id" id="id-trajet" pattern="\d*" placeholder="Entrez identifiant"/>

                    <input type="submit">
                </p>
            </fieldset>

        </form>
    </body>
</html>
