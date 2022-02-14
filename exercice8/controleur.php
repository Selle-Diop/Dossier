<?php
session_start();
include_once("fonctions.php"); 

if (isset($_POST['envoyer'])  ){
    $nombre= $_POST['nombre'];
    $_SESSION['post']=$_POST;
    $erro=[];

    estValide($nombre,'nombre',$erro);
    if(count($erro)==0){ 
        nombrequelconque($nombre);
         }
         else {
             $_SESSION ['error']=$erro;
            //  var_dump ($_SESSION ['error']);
            
          header('location:index.php');
         exit();
            
         }
    }
    else {
         $_SESSION['error']=$erro;
        header('location:index.php');
        exit();
    }
    
    

 