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
?>

<h1>
    I nostri post
</h1>
    <!-- Questo foreach cicla per 3: la key è la data-->
<?php foreach($posts as $data => $postPerData) { ?>
    <li>
        Lista dei post scritti in data: <?php echo $data ?>
        <ul>
            <!-- per ogni postPerData dammi un post  -->
            <?php foreach($postPerData as $singlePost) { ?>
            <li>
                <!-- stampi il titolo, l'autore e il testo del singlePost -->
                <p> Title: <?php echo $singlePost["title"]; ?> </p>
                <p> Author: <?php echo $singlePost["author"]; ?> </p>
                <p> Text: <?php echo $singlePost["text"]; ?> </p>
            </li>
            <?php } ?>
        </ul>
    </li>
<?php } ?>