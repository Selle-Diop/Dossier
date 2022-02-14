<?php
   session_start();
  //  var_dump ($_SESSION['post']);
   
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
     <label for=""> Veuillez entrer le nombre a</label>: 
        <input type="text" name="a" id="" value="<?php if(!isset($_SESSION['error']['a']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['a']; else echo'' ;  ?>"> 
      <?php if(isset($_SESSION['error']['a'])):?>
            <p style="color:red"><?php echo $_SESSION['error']['a'] ?>
        </p>
      <?php endif?>
   



        <br>
        <br>
        <label for=""> Veuillez entrer le nombre b </label>:
        <input type="text" class="b" id="" name="b" value="<?php if(!isset($_SESSION['error']['b']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['b']; else ''  ?>"> 
      <?php if(isset($_SESSION['error']['b'])):?>
            <p style="color:red"><?php echo $_SESSION['error']['b'] ?></p>
      <?php endif?>
      <br>


        

        
        
               
        
        
        <label for=""> Veuillez entrer le nombre c </label>:
        <input type="text" class="c" id="" name="c" value="<?php if(!isset($_SESSION['error']['c']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['c']; else ''  ?>"> 
      <?php if(isset($_SESSION['error']['c'])):?>
            <p style="color:red"><?php echo $_SESSION['error']['c'] ?></p>
      <?php endif?>

 
       
           

        
        <br>
        <br>
        <input type="submit" class="env" value="Envoyer" name="envoyer">
        
        
    </form>
    </fieldset>
    
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

