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
            "visiting team" => "blu",
            "points home team" => 5,
            "points visiting team" => 6,
        ],[
            "hometeam" => "fucsia",
            "visiting team" => "rosa",
            "points home team" => 7,
            "points visiting team" => 2,
        ],[
            "hometeam" => "neri",
            "visiting team" => "grigi",
            "points home team" => 7, 
            "points visiting team" => 10,
        ],
    ];

    var_dump($teams);

    $randomNumbers = rand(1,20);
    echo $randomNumbers
?>

correzione