<?php
include("conexion.php");

try {
    $sql = "CREATE TABLE IF NOT EXISTS `t_empleados` (
        `Clave_empleado` VARCHAR(8) NOT NULL PRIMARY KEY,
        `Nombre` VARCHAR(30) NOT NULL,
        `Apellido` VARCHAR(30) NOT NULL,
        `Clave_depto` INT NOT NULL,
        FOREIGN KEY (`Clave_depto`) REFERENCES `t_departamento`(`Clave_depto`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci";

    $conexion->exec($sql);
    echo "La tabla 't_empleados' se creó correctamente";
} catch (PDOException $e) {
    echo "Error al crear la tabla: " . $e->getMessage();
}

$conexion = null;
?>