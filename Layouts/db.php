<?php

    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $baseDeDatos = "ventasyalmacen";

    $conn = new mysqli($servidor, $usuario, $contrasena, $baseDeDatos);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    echo "Conexión exitosa a la base de datos '$baseDeDatos'.";

    $conn->close();
?>