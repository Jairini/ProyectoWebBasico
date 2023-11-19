<?php
    $servername = 'localhost';
    $username = 'root'; 
    $port='3306';
    $password = '';
    $bd = 'webbasica';

    $Conexion = mysqli_connect($servername,$username,$password,$bd,$port);
    if (mysqli_connect_error()){
        print "error en conexion";
        exit();
    }
    // mysqli_select_db($Bd);
    ?>