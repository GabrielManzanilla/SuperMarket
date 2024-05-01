<!DOCTYPE html>
<html>
<head>
    <title>Ver Productos</title>
</head>
<body>
    <h2>Lista de Productos</h2>

    <?php
    // Incluye el archivo de conexión a la base de datos
    include("../../conectar.php");

    // Realiza la consulta para obtener la lista de productos
    $consulta = "SELECT * FROM producto";
    $resultado = mysqli_query($enlace, $consulta);

    // Verifica si la consulta se realizó con éxito
    if ($resultado) {
        // Verifica si hay al menos un producto en la base de datos
        if (mysqli_num_rows($resultado) > 0) {
            // Muestra la tabla de productos
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Nombre</th><th>Precio</th><th>ID Categoría</th><th>ID Proveedor</th><th>Cantidad Disponible</th></tr>";
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $row['id_producto'] . "</td>";
                echo "<td>" . $row['nombre_producto'] . "</td>";
                echo "<td>" . $row['precio_unitario'] . "</td>";
                echo "<td>" . $row['id_categoria'] . "</td>";
                echo "<td>" . $row['id_proveedor'] . "</td>";
                echo "<td>" . $row['cantidad_disponible'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No hay productos registrados.";
        }
    } else {
        echo "Ha ocurrido un error al consultar los productos.";
    }

    if (!$resultado) {
        die("Error: " . mysqli_error($enlace));
    }
    
    ?>

    

    <br>
    <!-- Enlace para regresar al menú principal -->
    <a href="../../../index.php">Regresar al Menú Principal</a>
</body>
</html>
