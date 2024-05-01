<!DOCTYPE html>
<html>
<head>
    <title>Modificar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        /* Estilo para el botón salir */
        .exit-btn {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .exit-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <!-- Botón salir -->
    <a href="../../../index.php" class="exit-btn">Salir</a>
    <form action="ClientesModificarBD_Update.php" method="post">
        <?php
        if (strlen($_POST['Id']) >= 1) {
            $id = trim($_POST['Id']);
            include("../../index.php.php");
            
            $consulta = "SELECT * FROM clientes WHERE ID_CLIENTE='$id'";
            $resultado = mysqli_query($enlace, $consulta);
            if (!$resultado) {
                echo "Error en la consulta";
            } else {
                while ($renglon = $resultado->fetch_array(MYSQLI_ASSOC)) {
        ?>
        Id: <input type="text" name="Id" value="<?php echo $renglon['id_cliente']; ?>" readonly><br>
        Nombre: <input type="text" name="nombre" value="<?php echo $renglon['nombre_cliente']; ?>"><br>
        Dirección: <input type="text" name="dir" value="<?php echo $renglon['direccion_cliente']; ?>"><br>
        Teléfono: <input type="text" name="telefono" value="<?php echo $renglon['telefono_cliente']; ?>"><br>
        <input type="submit" value="Modificar">
    </form>
    <?php
                }
            }
        } else {
            echo "Favor de introducir datos, todos los campos son obligatorios";
        }
    ?>
</body>
</html>
