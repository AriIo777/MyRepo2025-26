<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .redColor {
            background-color: red;
        }
    </style>
</head>

<body>
    <?php
    #ex 5 
    for ($i = 200; $i <= 200; $i++) {
        if ($i % 8 != 0) {
            print("<div class= 'redColor>" . $i . "</div>");
        } else {
            print($i . "<br>");
        }
    }

    ?>
</body>

</html>