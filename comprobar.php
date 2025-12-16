<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>


<?php

include ("recoge.php");

$usuario = recoge("usuario");
$contrasena = recoge("contrasena");
$valor = recoge("valor");


$usuarioLogin = "admin";
$contrasenaLogin = "P4ssw0rd";

if($usuario == "" || $contrasena == "" || $usuario != $usuarioLogin || $contrasena != $contrasenaLogin){
   
    $_SESSION["conectado"] = false;  
    
    header("Location:login.php");
    
}else{
        $_SESSION["conectado"] = true;  

        header("Location:index.php");
}

if($valor == "Si"){
    session_destroy();

}elseif($valor == "No"){
     $_SESSION["conectado"] = true;  

    header("Location:index.php");
}

?>

<?php include("./footer.html"); ?>