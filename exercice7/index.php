<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controleur.php" method="post">
        <label for="jour">Veuillez saisir le jour</label>:
            <input type="text" name="jour" id="jour">
            <label for="mois">Veuillez saisir le mois</label>:
            <input type="text" name="mois" id="mois">
            <label for="annee">Veuillez saisir l'annee</label>:
            <input type="text" name="annee" id="annee">
            <input type="submit" name="envoyer" value="Envoyer">




    </form>
    
</body>
</html>