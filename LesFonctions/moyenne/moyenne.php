<?php
    function verifmoyenne($note) {
        $somme = 0;
        foreach ($note as $resultat) {
            $somme = $somme + $resultat;
        }

        $moyenne = $somme / count($note);
        echo 'La moyenne est de ' .$moyenne. '/20.';
    }
?>