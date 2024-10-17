<?php
$tab2 = array(24, 25, 26, 27);

function plusPetit($tab){
    if(empty($tab)){
        return null;
    }
return min($tab);
}

echo plusPetit($tab2);

?>