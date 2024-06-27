<?php

$posts = [

    '24/06/2024' => [
        [
            'title' => 'Post 1',
            'author' => 'Martina Liporata',
            'text' => 'Ho voglia di fare un viaggio'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Tiziano Amati',
            'text' => 'Oggi sono a Firenze'
        ],
    ],
    '25/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Marco Minora',
            'text' => 'Ho comprato un drone'
        ]
    ],
    '26/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Diego Bordegoni',
            'text' => 'Amo la natura'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Lorenzo Calzi',
            'text' => 'Amo i videogames'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Alessandra Terrioti',
            'text' => 'Oggi yoga'
        ]
    ],
];

foreach ($posts as $post => $value) {
    var_dump($post, $value);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    <main>
        <ul>
            <?php foreach($posts as $key => $data) { ?>
            <li>
                Data: <?php echo $key ?>
                <ul>
                    <?php foreach($data as $singlePost) { ?>
                    <li>
                        <p> Title: <?php echo $singlePost['title']; ?> </p>
                        <p> Author: <?php echo $singlePost['author']; ?> </p>
                        <p> Text: <?php echo $singlePost['text']; ?> </p>
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
        </ul>
    </main>
</body>
</html>

    