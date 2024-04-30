<!DOCTYPE html>
<html>
<head>
    <title>Guardar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
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
        /* Estilo para el botón de salida */
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
    <!-- Botón salir -->
    <a href="index.php" class="exit-btn">Salir</a>
    <div class="container">
        <?php
        if (isset($_POST['Id']) && strlen($_POST['Id']) >= 1) {
            $id = $_POST['Id'];
            $nombre = trim($_POST['nombre']);
            $dir = trim($_POST['dir']);
            $tel = trim($_POST['telefono']);
            include("conectar.php");
            $consulta = "UPDATE clientes SET nombre_cliente='$nombre', direccion_cliente='$dir', telefono_cliente='$tel' WHERE id_cliente='$id'";
            $resultado = mysqli_query($enlace, $consulta);
            if ($resultado) {
                echo "<h2>Se ha actualizado el cliente exitosamente</h2>";
            } else {
                echo "<h2>Ha ocurrido un error</h2>";
            }
        } else {
            echo "<h2>Favor de introducir datos, todos los campos son obligatorios</h2>";
        }
        ?>
        <br>
        <a href="ClientesVer.php">Mostrar Clientes</a>
        <br>
        <a href="ClientesModificar.php">Modificar Clientes</a>
    </div>
</body>
</html>
