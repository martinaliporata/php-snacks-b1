<?php
    $matches = [
        [
            "team1" => "rossi",
            "team2" => "gialli",
            "point_team_1" => 2,
            "point_team_2" => 4,
        ],
        [
            "team1" => "verdi",
            "team2" => "blu",
            "point_team_1" => 5,
            "point_team_2" => 6,
        ],
        [
            "team1" => "fucsia",
            "team2" => "rosa",
            "point_team_1" => 7,
            "point_team_2" => 2,
        ],
        [
            "team1" => "neri",
            "team2" => "grigi",
            "point_team_1" => 7,
            "point_team_2" => 10,
        ],
    ];
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
            <?php foreach ($matches as $match) { ?>
                <li>
                    <?php echo $match['team1']; ?> - <?php echo $match['team2']; ?> | <?php echo $match['point_team_1']; ?> - <?php echo $match['point_team_2']; ?>
                </li>
            <?php } ?>
        </ul>
    </main>
</body>
</html>