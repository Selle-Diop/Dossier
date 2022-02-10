<?php
function dateprecedente ($an,$mois,$jour) {
    if(datevalide($an,$mois,$jour) ){
        if($jour!=1){
            $jour--;
        }
        else{
            $jour=nombrejour($an,$mois-1);
            if($mois==1){
                $mois=12;
                $an--;
            }
            else{
                $mois--;
            }
        }

    
}
echo "la date precedente est :" .$jour."/".$mois."/".$an ;
}

function datesuivante ($an,$mois,$jour){


if (datevalide($an,$mois,$jour)){

    if ($jour==nombrejour($an,$mois)){
        $jour=1;
        if($mois !=12){
            $mois++;
        }
        else 
         $mois=1;
         $an++;
         }
        else 
            $jour++;
        
    }
    echo "la date suivante est :" .$jour."/".$mois."/".$an. "<br>";

}
 

 

function datevalide($an,$mois,$jour)
{
if ($jour>=1 && $jour <= nombrejour($an,$mois)  && ($mois>0 && $mois<=12))
{
    return true;
}
    return false;
}

function Anneebissectile ($an)
{
    
    if (($an%4==0) && ($an%100!=0) || ($an%400==0)){
        return true; 
    }
    
    return false;
}

function nombrejour ($an,$mois) : int
{
    
    if ($mois==2) {
        if (Anneebissectile($an)) {
            $nbjr=29;
        }else {
        $nbjr=28;
    }
}
   elseif ($mois==1 || $mois==3 || $mois==5 || $mois==7 || $mois==8 || $mois==10 || $mois==12) {
       $nbjr=31;
    }
    
    elseif($mois==4 || $mois==6 || $mois==11 || $mois==9 ) {
        $nbjr=30;   
    }
    return $nbjr;
}



