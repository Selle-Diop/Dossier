<?php 
   function point($xa,$ya,$xb,$yb):float{
       $ab=$xb-$xa;
       $or=$yb-$ya;
       return   sqrt(pow($ab,2)+pow($or,2));
       

   }