<?php
session_start();
// var_dump ($_SESSION['error']['nombre']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
<form action="contreleur.php" method="post">
        <label for="nombre">Veuillez entrer un Nombre Entier Positif</label>
        <input type="text"  name="nombre" id="nombre">
        <?php if(isset($_SESSION['error']['nombre'])):?>
             <p style="color:red"><?php echo $_SESSION['error']['nombre'] ; ?>
        </p>
         <?php endif?>
        <input type="submit" value="envoyer" name="envoyer">
    </form>
    
</body>
</html>