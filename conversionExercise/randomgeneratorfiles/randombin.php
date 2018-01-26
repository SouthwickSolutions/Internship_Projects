<?php
        
    function randombin(){
        //generate a random binary number between 0 and 256
        $rand = mt_rand(0, 255);
        $rand = decbin($rand);
        echo $rand;
        return $rand;
    }

?>