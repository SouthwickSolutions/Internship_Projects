<?php
        
    function randomdec(){
        //generate a random decimal number between 0 and 256
        $rand = mt_rand(0, 255);
        echo $rand;
        return $rand;
    }

?>