<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        p {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        a {
            display: block;
            text-align: center;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }
        a:hover {
            color: #0056b3;
        }
        /* Estilos para el botón de salida */
        .exit-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }
        .exit-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <!-- Botón de salida -->
    <a href="clientealta.php" class="exit-btn">Salir</a>

    <div class="container">
        <?php
        if (strlen($_POST['nombre']) >= 1 && strlen($_POST["dir"]) >= 1 && strlen($_POST["telefono"]) >= 1) {
            $nombre = trim($_POST['nombre']);
            $dir = trim($_POST['dir']);
            $tel = trim($_POST['telefono']);
            include("../../index.php.php");
            $consulta = "INSERT INTO clientes (nombre_cliente, direccion_cliente, telefono_cliente) VALUES ('$nombre', '$dir', '$tel')";
            $resultado = mysqli_query($enlace, $consulta);
            if ($resultado) {
                echo "<h2>Cliente creado exitosamente</h2>";
            } else {
                echo "<h2>Error al crear el cliente</h2>";
                echo "<p>" . mysqli_error($enlace) . "</p>";
            }
        } else {
            echo "<h2>Favor de introducir datos</h2>";
            echo "<p>Todos los campos son obligatorios</p>";
        }
        ?>
        <a href="clientealta.php">Regresar al formulario de alta de clientes</a>
        <a href="ClientesVer.php" class="btn">Ver lista de clientes</a>
    </div>
</body>
</html>
