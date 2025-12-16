<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php

include ("recoge.php");

$user = recoge("user");
$password = recoge("password");
$value = recoge("valor");

$userLogin = "admin";
$passwordLogin = "P4ssw0rd";

if($user == "" || $password == "" || $user != $userLogin || $password != $passwordLogin){
   
    $_SESSION["conectado"] = false;  
    
    header("Location:login.php");
    
}else{
        $_SESSION["conectado"] = true;  

        header("Location:index.php");
}

if($value == "Si"){
    session_destroy();

}elseif($value == "No"){
     $_SESSION["conectado"] = true;  

    header("Location:index.php");
}

?>

<?php include("./footer.html"); ?>