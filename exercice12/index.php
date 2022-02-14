<?php
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
        <p>
        <label for="option">Veuillez choisir votre Langue</label>
    <select name="choix" id="option" >
        <option value="Francais" selected>Francais</option>
        <option value="Anglais" name="anglais">Anglais</option>
        <input type="submit" value="envoyer" name="envoyer">





</select>
</p>
    </form>
    <?php

$tab=array(

 array('janvier','Fevrier', 'mars','avril', 'mai','juin',
'juilliet','aout','septembre','octobre','novembre','decembre')

);
for ($i=0; $i <sizeof($tab) ; $i++) { 
    

for ($j=0; $j <12 ; $j++) { 
    echo '<table><tr><td>'.$tab[$i][$j].'</td></tr>';
}
 echo "</table>";
}

// foreach ($tab as $key => $values) {
    
    

// foreach ($values as  $value) {
    
        
    
//     echo '<table> <tr><td>'.$value.'</td></tr> ';
    

// }
//  echo "<table>";
//  }


?>
</body>
</html>