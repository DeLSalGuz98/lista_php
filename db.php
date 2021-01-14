<?php
    session_start();
    //conectamos la base de datos con php
    $conn = mysqli_connect(
        'localhost',
        'root',
        'password',
        'db_lista_php'
    );
    // verificar coneccion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>