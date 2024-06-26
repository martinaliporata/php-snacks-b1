<?php
    $randomNumbers = [
        '',
    ];
    
    
    for ($i=0; $i < 15; $i++) {
        $generatedNumber= rand(1,100);
        $risultato = array_unique($generatedNumber);
        echo $risultato;
    }
?>