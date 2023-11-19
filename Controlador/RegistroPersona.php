<?php
    
    if (!empty($_POST['BtnGuardar'])){
        if (!empty($_POST['nombre']) and !empty($_POST['email']) and !empty($_POST['contrasena'])){ 
            $nombre = $_POST['nombre'] ;
            $email = $_POST['email'];
            $contrasena = $_POST['contrasena'];

            include "../Modelo/Conexion.php";
            $sql = $Conexion->query("INSERT INTO usuarios(Nombre, email, Contrasena) VALUES('$nombre','$email', '$contrasena')");

            if ($sql == 1){
                header("location:../index.php");
            } else {
                echo '<div class="alert alert-danger">Datos No Ingresados</div>';
            }             
        } else {
            echo '<div class="alert alert-warning">Algunos campos están vacíos</div>';
        }
    }

?>