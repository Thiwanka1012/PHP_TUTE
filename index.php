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

    $_SESSION['username']='Thiwa Holdings';
    echo $_SESSION['username'];
    echo "<br>";

    if(!isset($_SESSION['username'])){
        echo "Session is not set";
    }else{
        echo "Session is set";
    }
    echo "<br>";


    ?>

</body>
</html>