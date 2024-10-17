<?php
$Argument = 'Password';
function verificationPassword($Argument){
    if(strlen($Argument) >= 8){
        return true;
    }
return false;
}
?>