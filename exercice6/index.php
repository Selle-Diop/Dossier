<?php
  session_start();
//   if(isset($_SESSION['err'])){
//       $err=$_SESSION['err'];
//       $p=$_SESSION['post'];
//       var_dump($p);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <fieldset> 
       <legend>Calcul equation second degré</legend>
    <form action="controleur.php" method="Post" >
     <label for="a"> Veuillez entrer le nombre a</label>: 
        <input type="text" class="a" id="a" name="a" >
        <!-- value="
                <?php
                    //(!isset($err['a']))?$err['a']:''
                    if(isset($_SESSION['post']['a']))
                        echo $_SESSION['post']['a'];
                    else
                        echo '';
                ?>
        " -->
       
       <!-- <div>
        <span style="color:red;">
        <?php
            if(isset($err['a'])) 
                echo ($_SESSION['err']['a']);
            else
                echo '' ;
        ?>
        </span>
     </div> -->
        <label for="b"> Veuillez entrer le nombre b </label>:
        <input type="text" class="b" id="b" name="b">
         <span style="color:red;">
         <?php
            if(isset($err['b'])) 
                echo ($_SESSION['err']['b']);
            else
                echo '' ;
        ?>
        </span> 
        <br>
        <label for="c"> Veuillez entrer le nombre c </label>:
        <input type="text" class="c" id="c" name="c"><br>
        <input type="submit" class="env" value="Envoyer" name="envoyer">
        
        
    </form>
    </fieldset>
</body>
</html>
<?php
    // if(isset($_SESSION['err']) || isset($_SESSION['post']['a'])){
    //     unset($_SESSION['err']);
    //     unset($_SESSION['post']['a']);
    // }
?>