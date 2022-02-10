<?php
include_once ("fonctions.php");
$jour=$_POST['jour'];
$mois=$_POST['mois'];
$annee=$_POST['annee'];
if (isset($_POST['envoyer'])) {
    if(!empty($jour) && !empty($mois) && !empty($annee)){
      if(is_numeric($jour) || $jour==0 && is_numeric($mois) || $mois==0  && is_numeric($annee) || $annee==0) {
        datesuivante ($annee,$mois,$jour);
        dateprecedente ($annee,$mois,$jour);


      } 
    
    
    }


}
