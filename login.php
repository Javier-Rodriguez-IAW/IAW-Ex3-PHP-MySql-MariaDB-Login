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

    <h2>Introduzca sus credenciales</h2>

    <form action="comprobar.php" method="post">
 
    <label>Usuario:</label>
    <input type="text"name="usuario" required/>
    <br/>
    <label>Contrasena:</label>
    <input type="password"name="contrasena" required/>

    <br/>
    <br/>

    <input type="submit"  name="submit" value="Iniciar Sesion"/>
    <input type="reset" value="Borrar"/>

    </form>   
    
</body>
</html>