<?php
session_start(); 

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
        <label for="jour"><span class="jour">Veuillez saisir le jour</span></label>:
            <input type="text" class="jour" name="jour" id="jour" value="<?php if(!isset($_SESSION['error']['jour']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['jour']; else echo '';  ?>" >
            <?php if(isset($_SESSION['error']['jour'])):?>
            <p style="color:red"><?php echo $_SESSION['error']['jour'] ?></p>
            <?php endif?>
            
            
            

            <label for="mois"><span class="mois">Veuillez saisir le mois</span></label>:
            <input type="text"class="mois"  name="mois" id="mois" value="<?php if(!isset($_SESSION['error']['mois']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['mois']; else echo '';  ?>"> 
            <?php if(isset($_SESSION['error']['mois'])):?>
            <p style="color:red"><?php echo $_SESSION['error']['mois']; ?></p>
            <?php endif?>
            <label for="annee"><span class="annee">Veuillez saisir l'annee</span></label>:
            <input type="text" class="annee" name="annee" id="annee" value="<?php if(!isset($_SESSION['error']['mois']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['annee']; else echo '';  ?>">
            <?php if(isset($_SESSION['error']['annee'])):?>
            <p style="color:red"><?php echo $_SESSION ['error']['annee'] ; ?></p>
            <?php endif?>

            <input type="submit" class="env" name="envoyer" value="Envoyer">




    </form>
    
</body>
</html>

<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

?>