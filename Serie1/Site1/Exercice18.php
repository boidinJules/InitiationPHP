<?php
$Argument = 'Password123';

function verificationPassword($Argument){
    if(strlen($Argument) < 8){
        return false;
    }

    if(!preg_match('/[A-Z]/', $Argument)){
        return false;
    }

    if(!preg_match('/[a-z]/', $Argument)){
        return false;
    }

    if(!preg_match('/[0-9]/', $Argument)){
        return false;
    }
    return true;
}
?>
