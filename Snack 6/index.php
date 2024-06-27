<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <section class="bg-grey">
        <ul>
            <?php foreach ($db["teachers"] as $teacher) { ?>
                <li>
    <!-- se avessi lasciato $teacher senza [] dava errore perché non può stamparmi unarray a mo' di/come/sottoforma di stringa -->
                    <?php echo $teacher["name"] . " " . $teacher["lastname"]?>
                </li>
            <?php } ?>
        </ul>
    </section>
    <section class="bg-green">
        <ul>
            <?php foreach ($db["pm"] as $pm) { ?>
                <li>
                    <?php echo $pm["name"] . " " . $pm["lastname"] ?>
                </li>
            <?php } ?>
        </ul>
    </section>
</body>
</html>