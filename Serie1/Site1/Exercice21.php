<?php
$Argument1 = 'Bonjour les amis';
$Argument2 = 'Les cours de programmation Web sont trops cools';
function remplacerLesLettres($Argument1, $Argument2){
    $Argument1 = str_replace("e", "3", $Argument1);
    $Argument1 = str_replace("i", "1", $Argument1);
    $Argument1 = str_replace("o", "0", $Argument1);

    $Argument2 = str_replace("e", "3", $Argument2);
    $Argument2 = str_replace("i", "1", $Argument2);
    $Argument2 = str_replace("o", "0", $Argument2);

return $Argument1;
return $Argument2;
}
?>