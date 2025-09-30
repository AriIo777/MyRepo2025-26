<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .redColor{
        background-color: red;
       }
    </style>
</head>

<body>

    <?php
    /*Ex3*/
    for ($i = 200; $i <= 250; $i++) {
    
        if ($i % 2 == 1) {
            echo ($i . "<br>");
        } else {
        }
    }
    
    /*Ex4*/
    for ($i=200; $i<=200; $i++) {
        if ($i % 5 == 0) {
            print ("<div class= 'redColor>".$i."</div>");
        }

        ?>
        <div class= 'redColor'> <?=$i?></div>;
        
        <?php
        
        else {
        print ($i . "<br>");
        }
    } #wut da fug

    

    ?>

    

</body>

</html>