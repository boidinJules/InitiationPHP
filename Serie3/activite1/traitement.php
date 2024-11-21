<?php
$jsonFile = 'data.json';
$jsonData = file_get_contents($jsonFile);
$données = json_decode($jsonData, true);

function traitement($email, $données){
    foreach ($données as $utilisateur) {
        if ($utilisateur['email'] === $email) {
            return false;
        }
    }
    return true;
}




?>