<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>

        <li><a href="index.php">Home</a></li>
        <li><a href="user.php">User</a></li>



    </ul>


    <?php

    echo $_SESSION['username'];
    echo "<br>";

    ?>

</body>
</html>