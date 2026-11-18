<?php
include("conexion.php");
try{
    $conexion->beginTransaction();

    $stmt = $conexion->prepare("INSERT INTO t_empleados (Clave_empleado, Nombre, Apellido, Clave_depto) VALUES (:Clav, :nom, :ape, :claved)");

    $stmt->execute([':Clav' => 'EMP01', ':nom' => 'Armando', ':ape' => 'López', ':claved' => '2']);
    $stmt->execute([':Clav' => 'EMP02', ':nom' => 'Tatiana', ':ape' => 'Vargas', ':claved' => '1']);
    $stmt->execute([':Clav' => 'EMP03', ':nom' => 'Laura', ':ape' => 'Iturria', ':claved' => '3']);
    $stmt->execute([':Clav' => 'EMP04', ':nom' => 'Juan', ':ape' => 'Pérez', ':claved' => '4']);
    $stmt->execute([':Clav' => 'EMP05', ':nom' => 'Iván', ':ape' => 'López', ':claved' => '4']);
    $stmt->execute([':Clav' => 'EMP06', ':nom' => 'Margarita', ':ape' => 'Hernández', ':claved' => '1']);
    $stmt->execute([':Clav' => 'EMP07', ':nom' => 'Jesus', ':ape' => 'Pérez', ':claved' => '3']);
    $stmt->execute([':Clav' => 'EMP08', ':nom' => 'Tonatiuh', ':ape' => 'Flores', ':claved' => '2']);
    $stmt->execute([':Clav' => 'EMP09', ':nom' => 'Juan', ':ape' => 'López', ':claved' => '4']);
    $stmt->execute([':Clav' => 'EMP10', ':nom' => 'José', ':ape' => 'Hernández', ':claved' => '5']);

    $conexion->commit();
    echo"Nuevos registros creados exitosamente";
    } catch (PDOException $e) {
        $conexion->rollBack();
        echo "Error en inserción múltiple: " . $e->getMessage();

}
$conexion = null;

?>