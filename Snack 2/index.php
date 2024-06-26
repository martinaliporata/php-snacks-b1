<?php
    if ($_GET[name] > 3) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    };

    if (strpos($_GET[mail], "@" && ".", offset)) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    };
    
    if (is_numeric($_GET[age])) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
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
        <input type="text" name="name" id="name">
        <input type="text" name="mail" id="mail">
        <input type="text" name="age" id="age">
        <button type="submit">
            Invia
        </button>
    </form>
</body>
</html>