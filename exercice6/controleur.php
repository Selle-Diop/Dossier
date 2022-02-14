<?php
session_start();
include_once ("fonctions.php");

if(isset($_POST['envoyer'])){
    $a = $_POST ['a'];
    $b = $_POST ['b'];
    $c = $_POST ['c'];
     $_SESSION['post']=$_POST; 
    $erro=[];
    estValide($a,'a',$erro);
    estValide($b,'b',$erro);
    estValide($c,'c',$erro);
    if(count($erro)==0){ 
        equation ($a,$b,$c); 
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
     
//     if(!empty($a)  && !empty($b) && !empty($c)){

//     if (is_numeric($a) || $a == 0 && is_numeric($b) || $b==0 && is_numeric($c)|| $c==0) {

//         equation($a,$b,$c);
//     }
//     else {
//         echo "veuillez saisir un nombre";
//     }
       
   
//    }
//    else{
// //    header("location:index.php");
//      echo "veuillez saisir les champs";
    

//  }

//  }
//  else{
//   header("location:index.php");
  
 

?>