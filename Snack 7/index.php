<?php
    require_once __DIR__ . "/partials/alumns.php";
?>

<ul>
    <?php foreach ($alumns as $alumn) { ?>
        <li>
            <?php echo $alumn["name"] . " " . $alumn["surname"] . " " . array_sum($alumn["votes"]) / count($alumn["votes"]); ?>
        </li>
    <?php } ?>
</ul>