<?php
    require_once __DIR__ . "/animals.php";

    $mammiferi = array_filter(
        $animals, function ($animal) {
            return $animal["classe"] == "Mammifero";
        }
    );

    $pesci = array_filter(
        $animals, function ($animal) {
            return $animal["classe"] == "Pesce";
        }
    );

    $anfibi = array_filter(
        $animals, function ($animal) {
            return $animal["classe"] == "Anfibio";
        }
    );

    $rettili = array_filter(
        $animals, function ($animal) {
            return $animal["classe"] == "Rettile";
        }
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <ul>
        <!-- al posto di $mammifero a riga 420 e 42, devo scrivere animal? -->
        <?php foreach ($mammiferi as $mammifero) { ?>
            <li>
                <?php echo $mammifero["nome"] . " " . $mammifero["classe"]; ?>
            </li>
        <?php } ?>
        <?php foreach ($pesci as $pesce) { ?>
            <li>
                <?php echo $pesce["nome"] . " " . $pesce["classe"]; ?>
            </li>
        <?php } ?>
        <?php foreach ($anfibi as $anfibio) { ?>
            <li>
                <?php echo $anfibio["nome"] . " " . $anfibio["classe"]; ?>
            </li>
        <?php } ?>
        <?php foreach ($rettili as $rettile) { ?>
            <li>
                <?php echo $rettile["nome"] . " " . $rettile["classe"]; ?>
            </li>
        <?php } ?>
    </ul>
    </main>
</body>
</html>