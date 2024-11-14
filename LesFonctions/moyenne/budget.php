<?php
    function budget($budget, $achats){
        if($budget >= $achats) :
            echo "true";
            return true;
        else :
            echo "false";
            return false;
        endif;
   }
?>