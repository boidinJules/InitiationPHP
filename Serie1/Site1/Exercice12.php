<?php
$argument1 = 10;
$argument2 = 20;
$argument3 = 30;
function plusPetit($argument1, $argument2, $argument3){
    if ($argument1 < $argument2){
        if ($argument1 < $argument3){
            return $argument1;
        }
}   else if($argument2 < $argument3){
        return $argument2;
}
return $argument3;
}
?>