<?php
include("conexion.php");

$sql = "SELECT * FROM t_departamento";
$stmt = $conexion->query($sql);
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($resultados);
echo "</pre>";
$conexion = null;
?>