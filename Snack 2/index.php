<?php
// se la lunghezza della stringa inserita nell'input name di get è minore o uguale a 3, allora nega l'accesso
    if (strlen($_GET["name"]) <= 3) {
        echo "Accesso negato";
// se nella stringa mail inserita nell'input mail di get non c'è né la @ né il ., allora nega l'accesso
    } elseif (!str_contains($_GET["mail"], "@") || !str_contains($_GET["mail"], ".")) {
        echo "Accesso negato";
// se il numero della stringa inserita nell'input age di get non è un numero, allora nega l'accesso
    } elseif (!is_numeric($_GET["age"])) {
        echo "Accesso negato";
    } else {
        echo "Accesso riuscito";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <form action="./index.php" method="get">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="mail">Mail</label>
            <input type="text" name="mail" id="mail">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="text" name="age" id="age">
        </div>
        <div>
            <button type="submit">
                Invia
            </button>
        </div>
    </form>
</body>
</html>