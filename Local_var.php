<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $x=10;
        function FunctionName()
        {
            $GLOBALS['x'];
            echo $GLOBALS['x'];
        }

        FunctionName($x);
        echo $x . "<br>";
        echo $y . "<br>";


    
    
    
    ?>
</body>
</html>