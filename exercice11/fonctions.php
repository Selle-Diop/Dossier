<?php
function nbrdenbrPremier ($n){
    $trouve=false;
    for ($i=2; $i <=$n ; $i++) { 
        $cmpt=0;
        for ($j=1; $j <=$i ; $j++) { 
            if ($i%$j==0) {
                $cmpt++;
            }
        }
        if ($cmpt==2) {
            if($trouve){
                echo "";
            }
            echo $i. ";";
        }
    
    }
}

function premier ($n){
    $cpt=0;
    for ($i=1; $i<=$n ; $i++) { 
        if ($n%$i==0) {
            $cpt++;
        }
    }
    if ($cpt==2) {
        return true;
    }
    return false;
}
function nbre($a){
    $j=0;
    $tab=array();
    for ($i=1; $i < $a ; $i++) 
    { 
        if (premier($i)) 
        {
            $j++;
            $tab[$j]=$i;  
        }
        echo $tab[$j]; die;
    }
return $tab;

}
function validNombre($nbre,string $key,array &$arrError ):void{
    if(estVide($nbre)){
        $arrError[$key]="Veullez saisir une valeur";
    }else{
        if(!estNombre($nbre) && $nbre>50){
            $arrError[$key]="Veullez saisir un nombre";
        }
    }
   }
   function estNombre($nbre):bool{
       return is_numeric($nbre); 
   }
   function estVide($nbre):bool{
    return empty($nbre);
     }
     function tableauPremier($nbr){
         $tab=[];
         for ($i=0; $i <=$nbr ; $i++) { 
             if (premier($nbr)) {
                 $tab[]=$tab[$i];
             }

         }
         $som=0;
        for ($i=0; $i <sizeof($tab) ; $i++) { 
            $som=$som+$tab[$i];
        }
        $moy=$som/sizeof($tab);
     }
  
