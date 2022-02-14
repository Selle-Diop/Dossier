<?php  
session_start();
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
    <form action="controleur.php" method="post">

        <label for="nombre">Veuillez entrer un Nombre Entier Positif</label>

        <input type="text" class="block" name="nombre" id="nombre"><br>
           
            <?php
             if(isset($_SESSION['error']['nombre'])):
            ?>
            <p style="color:red"><?php echo $_SESSION['error']['nombre'] ; ?>
        </p>
            <?php endif?>
                
    
            
        <input type="submit" value="envoyer" name="envoyer">
    </form>
</body>
</html>
<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}
if(isset($_SESSION['post'])){
  unset($_SESSION['post']);
}
?>