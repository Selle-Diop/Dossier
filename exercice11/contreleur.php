<?php
session_start();
include_once("fonctions.php");

  
if(isset($_POST['envoyer'])){
    $nombre=$_POST['nombre']; 
    $_SESSION['post']=$_POST; 
    $error=[];
    estValide($nombre,'nombre', $error );

    if (count($error)==0) {
        tableInfsup($nombre);
         }
         else {
            $_SESSION['error']=$error;
        
           header('location:index.php');
           exit();
           }
    
    }

else {
    
    header('location:index.php');
    exit();
}
?>
 <link rel="stylesheet" href="style.css">