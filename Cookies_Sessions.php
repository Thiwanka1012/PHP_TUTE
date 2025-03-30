<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $usernamr="Thiwanka Umesh";
        setcookie("username", "Thiwanka Umesh", time() + (86400)); // 86400 = 1 day
    
        $_SESSION['name']="Thiwanka Umesh";
    ?>
</body>
</html>