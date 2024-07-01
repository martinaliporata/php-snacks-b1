<?php
$animals = [
    [
        "nome" => "lino",
        "specie" => "cavallo",
        "classe" => "mammifero"
    ],
    [
        "nome" => "lino",
        "specie" => "cane",
        "classe" => "mammifero"
    ],
    [
        "nome" => "lino",
        "specie" => "anguilla",
        "classe" => "pesce"
    ],
    [
        "nome" => "lino",
        "specie" => "merluzzo",
        "classe" => "pesce"
    ],
    [
        "nome" => "lino",
        "specie" => "trota",
        "classe" => "pesce"
    ],
    [
        "nome" => "lino",
        "specie" => "iguana",
        "classe" => "rettile"
    ],
    [
        "nome" => "lino",
        "specie" => "serpente",
        "classe" => "rettile"
    ],
];

// se vogliamo farlo con una funzione: essendo un array associativo, filtra l'array dove la chiave è uguale a value 
function filterEquals ($array, $key, $value) {
    $tempArray= [];
    foreach($array as $element) {
        if ($element[$key] == $value) {
            $tempArray[]= $element;
        }
    }

    return $tempArray;
};

// questi sono le funzioni filterEqauls con i tempArray

$mammals = filterEquals($animals, "classe", "mammifero");
var_dump ($mammals);

$reptiles= filterEquals($animals, "classe", "rettile");
var_dump ($reptiles);

$fishes= filterEquals($animals, "classe", "pesce");
var_dump ($fishes);

// $mammals = [];
// foreach ($animals as $animal) {
//     // se la classe di animal è mammifero
//     if($animal["classe"] == "mammifero") {
//         // allora pushami nell'array mammals l'animal
//         $mammals[] = $animal;
//     }
// }

// $fishes = [];
// foreach ($animals as $animal) {
//     // se la classe di animal è mammifero
//     if($animal["classe"] == "pesce") {
//         // allora pushami nell'array mammals l'animal
//         $fishes[] = $animal;
//     }
// }

// $reptiles = [];
// foreach ($animals as $animal) {
//     // se la classe di animal è mammifero
//     if($animal["classe"] == "rettile") {
//         // allora pushami nell'array mammals l'animal
//         $reptiles[] = $animal;
//     }
// }
?>