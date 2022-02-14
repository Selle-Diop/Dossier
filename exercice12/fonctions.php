<?php



function tab( $langue){
    $tab=array(

        array('janvier','Fevrier', 'mars','avril', 'mai','juin',
       'juilliet','aout','septembre','octobre','novembre','decembre')
       
       );
       for ($i=0; $i <sizeof($tab) ; $i++) { 
           
       
       for ($j=0; $j <12 ; $j++) { 
           echo '<table> <tr><td>' .$tab[$i][$j].'</td></tr>';
       }
        echo '</table>';
       }
        }




        
    









