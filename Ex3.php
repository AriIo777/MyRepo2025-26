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
    
       <?php
            for ($i = 200; $i <= 250; $i++) {
                ?> 
                
                <?php
                if ($i % 2 == 1) {
                    echo "$i";
                } else {
                    
                }
            }
                ?>
                
        
</body>
</html>