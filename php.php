<!-- Using semicolon to end a statement -->
    <?php
        echo "Hello Brendan!";
    ?>


<!-- The closing tag implies a semicolon, and isnt needed for the last
line in a block of PHP. -->




<?php
    echo "Hello Brendan!";
    echo "Hi".
?>
<!-- Output: Hello Brendan!Hi  -->






<!-- A "advanced" example if embedding PHP -->

<body>
    <?php
        if (true){
            echo "<p>Some HTML text.</p>";
        }
    ?>
</body>
<!-- Output: Some HTML text. -->




<body>
    <?php if (true) { ?>
        <p>Some HTML text.</p> 
    <?php } ?>
</body>
<!-- Output: Some HTML text. -->


