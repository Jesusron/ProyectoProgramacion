<?php
$error;

if (!empty($_POST['email']) && !empty($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "juancho@gmail.com" && $password == "6969") {
       $error = "ok";
       header("Location: index.html");

    } else {
        $error = "incorrecto";
        header("Location: ingresar.php?error=$error");
    }

} else { 
    $error = "vacio";
    header("Location: ingresar.php?error=$error");

} ?>