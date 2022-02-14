<?php
include_once("fonctions.php");
if(isset($_POST['envoyer'])){

    $choix=$_POST['choix'];
    
    if ($choix=='Anglais') {
        # code...
    
     
        $tab=array(

            array('january','Febuary', 'March','April', 'MaY','July',
           'juilliet','August','september','october','november','december')
           
           );
           for ($i=0; $i <sizeof($tab) ; $i++) { 
               
           
           for ($j=0; $j <12 ; $j++) { 
               echo '<table><tr><td>'.$tab[$i][$j].'</td></tr>';
           }
            echo "</table>";
           
    }
} 
elseif ($choix=='Francais') {
    header("location:index.php");
}

      
  }
  else{
    header("location:index.php");
    exit();

  }