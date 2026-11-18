<?php
include("conexion.php");
try{
    $conexion->beginTransaction();

    $stmt = $conexion->prepare("INSERT INTO t_departamento (Nombre, Presupuesto) VALUES (:nom, :pres)");

    $stmt->execute([':nom' => 'Personal', ':pres' => '80000']);
    $stmt->execute([':nom' => 'Almacen', ':pres' => '70000']);
    $stmt->execute([':nom' => 'Contabilidad', ':pres' => '60000']);
    $stmt->execute([':nom' => 'Manufactura', ':pres' => '50000']);
    $stmt->execute([':nom' => 'Empaque', ':pres' => '30000']);

    $conexion->commit();
    echo"Nuevos registros creados exitosamente";
    } catch (PDOException $e) {
        $conexion->rollBack();
        echo "Error en inserción múltiple: " . $e->getMessage();

}
$conexion = null;
?>