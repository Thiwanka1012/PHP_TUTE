<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
       echo $_POST['name'];
       echo "<br>";
       echo $_POST['email'];
       echo "<br>";
       echo $_POST['password'];
    
    
    ?>

<form method="POST">

    <input type="hidden" name="name" value="Thiwanka Umesh">
    <input type="email" name="email">
    <input type="password" name= "password"> 
    <input type="submit" value="Click here">

</form>

</body>
</html>