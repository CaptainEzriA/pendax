<?php
include "fonctions.php";

$pendu="";

if( isset($_POST['pendu']) ){

    if($_POST['pendu'] != $pendu){ // Si un pendu a été entré
        $traits=transformation($_POST['pendu'],"");
        echo $traits ;    
    }
    
    else{ // Sinon
        echo "";
    }
}

?>