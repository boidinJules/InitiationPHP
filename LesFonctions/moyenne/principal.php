<?php
include 'moyenne.php';
include 'budget.php';
$budget = 1553.89;
$achats = 1554.76;
$note = array(15, 12, 9);

echo budget($budget, $achats);
echo "\n";
echo verifmoyenne($note);
?>