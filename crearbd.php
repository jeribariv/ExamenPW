<?php
include("conex.php");

try {
    
    $sql = "CREATE DATABASE IF NOT EXISTS personal CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci";


    $conexion->exec($sql);
    echo "<br>Base de datos 'personal' creada exitosamente";
} catch (PDOException $e) {
    echo "Error al crear la base de datos: " . $e->getMessage();
}


$conexion = null;
?>