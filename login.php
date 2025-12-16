<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="author" content="JavierRodriguez">
    <title>Document</title>
</head>
<body>

<?php session_start(); ?>

    <h2> Enter your credentials </h2>

    <form action="comprobarlogin.php" method="post">
 
    <label>User:</label>
    <input type="text" name="user" required/>
    <br/>
    <br/>
    <label>Password:</label>
    <input type="password" name="password" required/>

    <br/>
    <br/>

    <input type="submit"  name="submit" value="Iniciar Sesion"/>
    <input type="reset" value="Borrar"/>

    </form>   
    
</body>
</html>