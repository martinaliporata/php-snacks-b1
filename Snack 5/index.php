<?php
    $paragraph = "I have a dream that one day on the red hills of Georgia, the sons of former slaves and the sons of former slave owners will be able to sit down together at the table of brotherhood. I have a dream that one day even the state of Mississippi, a state sweltering with the heat of injustice, sweltering with the heat of oppression will be transformed into an oasis of freedom and justice. I have a dream that my four little children will one day live in a nation where they will not be judged by the color of their skin but by the content of their character. I have a dream today. I have a dream that one day down in Alabama with its vicious racists, with its governor having his lips dripping with the words of interposition and nullification, one day right down in Alabama little Black boys and Black girls will be able to join hands with little white boys and white girls as sisters and brothers. I have a dream today. I have a dream that one day every valley shall be exalted, every hill and mountain shall be made low, the rough places will be made plain, and the crooked places will be made straight, and the glory of the Lord shall be revealed, and all flesh shall see it together.";
    $splittedParagraph = explode (".", $paragraph);
?>

<ul>
    <?php foreach ($splittedParagraph as $sentence) { ?>
        <li>
            <p>
                <?php echo $sentence; ?>
            </p>
        </li>
    <?php } ?>
</ul>