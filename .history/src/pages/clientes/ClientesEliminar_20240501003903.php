<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"],
        input[type="submit"],
        .btn {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .btn {
            background-color: #28a745;
            color: #fff;
            border: none;
        }
        .btn:hover {
            background-color: #218838;
        }
        .exit-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #dc3545;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .exit-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <h2>Clientes</h2>

    <?php
    include("../../conectar.php");
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
                $id = $renglon['id_cliente']; // Ajuste en la clave del array
                $nombre = $renglon['nombre_cliente']; // Ajuste en la clave del array
                $dir = $renglon['direccion_cliente']; // Ajuste en la clave del array
                $tel = $renglon['telefono_cliente']; // Ajuste en la clave del array
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
    

    <form action="ClientesEliminarBase.php" method="post">
        Escribe el ID del Cliente a eliminar: 
        <input type="text" name="Id"><br>
        <input type="submit" value="Eliminar">
    </form>

    <a href="clientealta.php" class="btn">Alta de Clientes</a>
    <a href="ClientesVer.php" class="btn">Mostrar Clientes</a>
    <a href="ClientesModificar.php" class="btn">Modificar Clientes</a>
    <!-- Botón para salir -->
    <a href="../../../index.php" class="exit-btn">Salir</a>
</body>
</html>
