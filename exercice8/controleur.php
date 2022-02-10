<?php
include_once("fonctions.php");
$nombre=$_POST['nombre'];
if (isset($_POST['envoyer']) ){
    if (!empty($nombre) && is_numeric($nombre))
        {
             nombrequelconque($nombre);
    }
    
    
}