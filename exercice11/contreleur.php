<?php
include_once("fonctions.php");

  session_start();
if(isset($_POST['envoyer'])){
    $nombre=$_POST['nombre'];
    $_SESSION['post']=$_POST;
    $arrError=[];
    if (count($arrError)==0) {
        $tab=[];
        for ($i=1; $i <=$nombre ; $i++) {
            if (premier($i)) {
                $tab[]=$i;
            
            }
        }
        $som=0;
        for ($i=0; $i <sizeof($tab) ; $i++) { 
            $som=$som+$tab[$i];
        }
        $moy=$som/sizeof($tab);
        $tabinf=[];
        $tabsup=[];
        for ($i=0; $i <sizeof($tab) ; $i++) { 
                if ($moy>$tab[$i]) {
                    $tabinf[]=$tab[$i];
                    
                }
                else{
                    $tabsup[]=$tab[$i];
                }    
        }
        $tabl=[
            ' premier'=>$tab,
            ' inferieur'=>$tabinf,
            'superieur'=>$tabsup,
        ];
        print_r ($tabl);
        
        
    }
    else {
    $_SESSION['error']=$arrError;
    header('location:index.php');
    exit();
    }
    
}
else {
    
    header('location:index.php');
    exit();
}