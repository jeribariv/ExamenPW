<?php
include("conexion.php");

try {
    $sql = "CREATE TABLE IF NOT EXISTS `t_departamento` (
        `Clave_depto` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `Nombre` VARCHAR(30) NOT NULL,
        `Presupuesto` INT NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci";

    $conexion->exec($sql);
    echo "La tabla 't_departamento' se creó correctamente";
} catch (PDOException $e) {
    echo "Error al crear la tabla: " . $e->getMessage();
}

$conexion = null;
?>