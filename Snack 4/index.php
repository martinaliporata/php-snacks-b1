<?php    
    $randomNumbers = [];

    // finché la lenght di randonNumbers è minore di 15, creami numeri randomici
    while (count($randomNumbers) < 15) {
        $singleNum = rand(1, 20);
        // cosa cerco? SingleNum. Dove? In randomNumbers. Quindi qui dico "se non c'è..."
        if(!in_array($singleNum, $randomNumbers)) {
            // Allora fammi un array_push in randomNumber di singleNum
            array_push($randomNumbers, $singleNum);
        }
    }
?>


<ul>
    <?php foreach ($randomNumbers as $number) { ?>
        <li>
            <?php echo $number ?>
        </li>
    <?php } ?>
</ul>