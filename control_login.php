<?php
    require "conexion.php";
    $email = $_POST['email'];
    $password = $con->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";

    $res = $con->query($sql);

    if($res->num_rows>0){
        
        $usuario = $res->fetch_assoc();

        $_SESSION["autentificado"] =1;
        $_SESSION["nombre"] = $usuario['nombre'];
        $_SESSION["d_identidad"] = $usuario['d_identidad'];
        $_SESSION["ciudad"] = $usuario['ciudad'];
        $_SESSION["email"] = $usuario['email'];
        $_SESSION["direccion"] = $usuario['direccion'];
        $_SESSION["f_nacimiento"] = $usuario['f_nacimiento'];
        $_SESSION["telefono"] = $usuario['telefono'];
        $_SESSION["password"] = $usuario['password'];
        header("location:index.php");
    }else {
        header("location:login.php?error=si");
    }


?>