<!DOCTYPE html>
<html>
<head>
    <title>Modificar Clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative; /* Añadido */
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="submit"] {
            padding: 10px;
            margin-right: 10px;
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
        .nav {
            text-align: center;
            margin-bottom: 20px;
        }
        .nav a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .nav a:hover {
            background-color: #0056b3;
        }

        .btn {
            background-color: #28a745;
            color: #fff;
            border: none;
            display: block;
            text-align: center;
            text-decoration: none;
            padding: 8px 16px;
            margin: 20px auto;
            width: 50%;
        }
        .btn:hover {
            background-color: #218838;
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
        }
        .exit-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="../../../index.php" class="exit-btn">Salir</a>

        <h2>Clientes</h2>

        <?php
        include("../../index.php");
        $consulta = "SELECT * FROM clientes";
        $resultado = mysqli_query($enlace, $consulta);

        if (!$resultado) {
            echo "Error en la consulta";
        }
        ?>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre del Cliente</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($renglon = $resultado->fetch_array(MYSQLI_ASSOC)) {
                    $id = $renglon['id_cliente'];
                    $nombre = $renglon['nombre_cliente'];
                    $dir = $renglon['direccion_cliente'];
                    $tel = $renglon['telefono_cliente'];
                
                ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo $dir; ?></td>
                        <td><?php echo $tel; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <form action="ClientesModificarBD.php" method="post">
            Escribe el ID del Cliente a modificar: 
            <input type="text" name="Id">
            <input type="submit" value="Modificar">
        </form>

        <br>
        <div class="nav">
            <a href="ClientesVer.php">Mostrar Clientes</a>
        </div>
    </div>
</body>
</html>
