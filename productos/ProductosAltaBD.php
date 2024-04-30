<!DOCTYPE html>
<html>
<head>
    <title>Guardar</title>
</head>
<body>
    <?php
    // Verifica si se han enviado datos a través del formulario y si los campos tienen longitud mayor o igual a 1
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST["precio"]) >= 1 && strlen($_POST["idCat"]) >= 1 && strlen($_POST["idProv"]) >= 1) {
        // Obtiene y limpia los valores de los campos del formulario
        $nom = trim($_POST['nombre']);
        $precio = trim($_POST['precio']);
        $idCat = trim($_POST['idCat']);
        $idProv = trim($_POST['idProv']);

        // Incluye el archivo de conexión a la base de datos
        include("conectar.php");

        // Realiza la consulta para insertar los datos en la tabla de productos
        $consulta = "INSERT INTO producto (nombre_producto, id_categoria, id_proveedor, precio_unitario) 
                     VALUES ('$nom', '$idCat', '$idProv', '$precio')";
        $resultado = mysqli_query($enlace, $consulta);

        // Verifica si la consulta se realizó con éxito
        if ($resultado) {
            echo "Se ha creado un nuevo producto exitosamente";
        } else {
            echo "Ha ocurrido un error";
        }
    } else {
        echo "Favor de introducir datos, todos los campos son obligatorios";
    }
    ?>
    <br><a href="ProductosAlta.php">Alta de Productos</a>
</body>
</html>
