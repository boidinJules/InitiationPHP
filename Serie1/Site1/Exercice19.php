<?php
$tab = array('France' => 'Paris','Allemagne' => 'Berlin','Italie' => 'Rome','Maroc' => 'Rabat','Espagne' => 'Madrid','Portugal' => 'Lisbonne','Angleterre' => 'Londres');
function capital($tab){
    switch ($tab) {
        case 'France':
            return 'Paris';
        case 'Allemagne':
            return 'Berlin';
        case 'Italie':
            return 'Rome';
        case 'Maroc':
            return 'Rabat';
        case 'Espagne':
            return 'Madrid';
        case 'Portugal':
            return 'Lisbonne';
        case 'Angleterre':
            return 'Londres';
        default:
            return 'Inconnu';
    }
}
?>