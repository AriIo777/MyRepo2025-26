<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    #Ex6 & 7

    $a = 0;
    $b = 1;

    for ($i = 0; $a <= 1000000; $i++) {
        $c = $a + $b;

        print($i . ") " .  $a . "<br>");

        $a = $b;
        $b = $c;


    }

    ?>
</body>

</html>