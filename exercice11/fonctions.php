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
     function tableInfsup($nombre){

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
            
            $tabl=array ('premier'=>$tab,'inferieur'=>$tabinf,'superieur'=>$tabsup)
            
            
        ;
    //    foreach ($tabl as $key => $value) {
    //        echo $key. ' <br>';
    //        foreach ($value as $k => $v) {
    //            echo $v. '<br>';
    //        }
    //        echo '<br>';
    //    }
        
    tableau ($tabl['premier'] ); 
    tableau ($tabl['inferieur'] ); 
    tableau ($tabl['superieur'] ); 
    
    }
    function tableau (array $aff):void{
        $table="<table>";
        $tailetab=sizeof($aff);
        for ($i=1; $i <=$tailetab; $i++) { 
            if ($i%10==1) {
                $table=$table."<tr>";
                
            }
            $table=$table."<td>".$aff[$i-1]."</td>";
            if ($i%10==0){
                $table=$table."</tr>";
        }
        
        }

        echo $table. '<br>';

    }
    
function estVide($n):bool{
    return empty($n);
}
function estNum($n){
    return is_numeric($n);
}
function estValide($n,string $key,array &$err):void{
    if(estVide($n)){
        $err[$key]="veuillez saisir une valeur";
    }else {
        if(!estNum($n)){
            $err[$key]="veuillez saisir une valeur numerique";
        }
    }
} 




     
  
