<?php
session_start();
include_once("fonctions.php");
if (isset($_POST['envoyer']) ){
$nombre=$_POST['nombre'];
$_SESSION['post']=$_POST;  
$error=[];
estValide($nombre,'nombre', $error);
if (count($error)==0) {
    tablemultiplication($nombre);

}
else {
    $_SESSION['error']=$error;
    
    // var_dump ($_SESSION['error']);
    header('location:index.php');
    exit();
  }
        
}
else {
    $_SESSION['error']=$error;
    
    // var_dump ($_SESSION['error']);
    header('location:index.php');
    exit();
  }
