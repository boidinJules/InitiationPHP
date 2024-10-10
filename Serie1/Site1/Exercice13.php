<?php
$tab = array(24,18);
function premierElementTableau($tab){
    if($tab == ""){
        return false;
    }
return $tab[0];
}
echo premierElementTableau($tab);
?>