<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice:10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
   session_start();
?>  
<form action="controlleur.php" method="post">
    <label for="">Donner un nombre svp:</label><br><br>
    <input id="inp" type="text" name="t" value="<?php if(!isset($_SESSION['error']['t']) && isset($_SESSION['post'])) 
      echo  $_SESSION['post']['t']; else ''  ?>"> 
      <?php if(isset($_SESSION['error']['t'])):?>
            <span style="color:blue"><?php echo "<br>" . $_SESSION['error']['t'] ?></span>
      <?php endif?><br><br><br>
    <input type="submit" name="bouton" id="en" value="Envoie">
</form>
<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

?>
</body>
</html>