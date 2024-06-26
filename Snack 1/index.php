<?php
    $teams = [
        [
            "hometeam" => "rossi",
            "visitingteam" => "gialli",
            "pointshometeam" => 2,
            "pointsvisitingteam" => 4,
        ],
        [
            "hometeam" => "verdi",
            "visitingteam" => "blu",
            "pointshometeam" => 5,
            "pointsvisitingteam" => 6,
        ],[
            "hometeam" => "fucsia",
            "visitingteam" => "rosa",
            "pointshometeam" => 7,
            "pointsvisitingteam" => 2,
        ],[
            "hometeam" => "neri",
            "visitingteam" => "grigi",
            "pointshometeam" => 7,
            "pointsvisitingteam" => 10,
        ],
    ];

    var_dump($teams);

    foreach ($teams as $team) {
        $team['pointshometeam'] = $randomNumber;
    }
?>

<!-- correzione -->