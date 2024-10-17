<?php
$tab = array(24, 25, 26, 27);
function dernierElementTableau($tab){
    if(empty($tab)){
        return false;
    }
return end($tab);
}
?>