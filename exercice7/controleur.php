<?php
session_start();
include_once ("fonctions.php");


if (isset($_POST['envoyer'])) {
$jour=$_POST['jour'];
$mois=$_POST['mois'];
$annee=$_POST['annee'];  
$_SESSION['post']=$_POST;
$error=[];
estValide($jour,'jour',$error);
estValide($mois,'mois',$error);
estValide($annee,'annee',$error);
if (count($error)==0) {
  dateprecedente ($annee,$mois,$jour);
  datesuivante ($annee,$mois,$jour);
  
}else {
  $_SESSION['error']=$error;
  
  // var_dump ($_SESSION['error']);
  header('location:index.php');
  exit();
}

}
else{
  $_SESSION['error']=$error;
  
  // var_dump ($_SESSION['error']);
  header('location:index.php');
  exit();
}
