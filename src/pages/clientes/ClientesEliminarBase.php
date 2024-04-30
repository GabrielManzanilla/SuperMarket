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
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['Id'])) {
            $id = trim($_POST['Id']);
            include("../conectar.php");
            
            // Consulta preparada
            $consulta = "DELETE FROM clientes WHERE ID_CLIENTE = ?";
            $stmt = mysqli_prepare($enlace, $consulta);
            mysqli_stmt_bind_param($stmt, "s", $id);
            
            if (mysqli_stmt_execute($stmt)) {
                echo "<h2>Se eliminó el cliente exitosamente</h2>";
            } else {
                echo "<h2>Ha ocurrido un error: " . mysqli_error($enlace) . "</h2>";
            }
            
            mysqli_stmt_close($stmt);
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h2>Favor de introducir datos, todos los campos son obligatorios</h2>";
        }
        ?>

        <a href="ClientesVer.php" class="btn">Mostrar Clientes</a>
        <a href="ClientesEliminar.php" class="btn">Eliminar Clientes</a>
        <!-- Botón para salir -->
        <a href="../index.php" class="exit-btn">HOME</a>
    </div>
</body>
</html>
