<?php
        
    function randomhex(){
        //generate a random hex number between 0 and 0x100
        $rand = mt_rand(0x000000, 0xFF);
        $rand = dechex($rand);
        echo $rand;
        return $rand;
    }

?>