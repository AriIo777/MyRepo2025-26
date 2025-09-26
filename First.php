<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            border: 1px solid red;
        }
        .green {
            background-color: lightgreen;
            border: 1px solid red;
        }
        .blue {
            background-color: lightblue;
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <h1>hi</h1>
    <p>first php file</p>
        <?php
            for ($i = 1; $i <= 1111; $i++) {
                ?> 
                
                <?php
                if ($i % 2 == 0) {
                    echo "<div class='green'>";
                } else {
                    echo "<div class='blue'>";
                }
                ?>
                <?= $i ?> hello world</div>;
            <?php
            }
        ?>
</body>
</html>