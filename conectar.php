<?php
$enlace = mysqli_connect("localhost", "root", "", "supermercado2");

if (!$enlace) {
    die("No pudo conectarse la base de datos: " . mysqli_error($enlace));
}
?>
