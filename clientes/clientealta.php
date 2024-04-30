<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta a clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #28a745;
            overflow: hidden;
            text-align: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar a {
            display: block;
            color: #fff;
            text-align: center;
            padding: 24px 20px;
            text-decoration: none;
            font-size: 18px;
        }

        .sidebar {
            height: 100%;
            width: 15%;
            position: fixed;
            top: 70px;
            left: 0;
            background-color: #cdc;
            padding-top: 20px;
            z-index: 999;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 15px;
        }

        .sidebar li {
            padding: 20px;
            position: relative;
        }

        .sidebar li a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .sidebar li:hover {
            background-color: #218838;
        }

        .submenu {
            display: none;
            position: absolute;
            top: 0;
            left: 100%;
            background-color: #cdc;
            padding: 10px;
            border-radius: 0 5px 5px 0;
        }

        .sidebar li:hover .submenu {
            display: block;
        }

        .main-content {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin-top: 70px;
            margin-left:15%;
            background: #f2f0f0;
            position: relative;
            gap: 50px;

            padding: 110px
        }

        .form-container {
            background: #fff;
            padding: 40px; /* Incrementa el padding para hacer el formulario más grande */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top:45px;
        }

        .form-container label {
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container input[type="submit"] {
            width: 100%;
            padding: 15px; /* Incrementa el padding para hacer los campos de entrada más grandes */
            margin: 10px 0; /* Incrementa el margen entre los campos */
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 20px; /* Incrementa el tamaño de la fuente para hacer los campos de entrada más grandes */
        }

        .form-container input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
}
        .table-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-container th,
        .table-container td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table-container th {
            background-color: #f2f2f2;
        }

        .table-container tbody tr:hover {
            background-color: #f2f2f2;
        }
    </style>


    </style>
</head>
<body>
    <div class= "navbar">
        <a href="#" class="title-Super"> Bodega Aurrera</a>
    </div>


    <div class="sidebar">
    <ul>
            <li>

                <a href="#">
                    <img src="img/icons8-usuario-50.png" alt="Ícono de usuario" style="width: 24px; height: 24px; margin-right: 10px;"> <!-- Agrega la imagen al enlace -->
                    AClientes </a>
                <!-- Submenú para clientes -->
                <div class="submenu">
                    <a href="clientealta.php">Alta de Clientes</a>
                    <a href="ClientesEliminar.php">Eliminar Clientes</a>
                    <a href="ClientesModificar.php">Modificar Clientes</a>
                </div>
            </li>
            
            <li><a href="ProductosAlta.php">Alta de Productos</a></li>
            <li><a href="ProductoVerBD.php">Ver Productos</a></li>
        </ul>
    </div>


    <div class="main-content">

        <div class="form-container">

            <form  id="altaClienteForm" action="ClientesAltaBD.php" method="post">
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre"><br>
                <label for="dir">Dirección:</label><br>
                <input type="text" id="dir" name="dir"><br>
                <label for="telefono">Teléfono:</label><br>
                <input type="text" id="telefono" name="telefono"><br>
                <input type="submit" value="Guardar">
            </form>

        </div>
        

        <!-- Integración de la tabla de clientes -->
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Conexión a la base de datos
                    include("conectar.php");

                    // Consulta para obtener los clientes
                    $consulta = "SELECT * FROM clientes";
                    $resultado = mysqli_query($enlace, $consulta);

                    if (!$resultado) {
                        echo "Error en la consulta";
                    } else {
                        // Mostrar los clientes en la tabla
                        while ($renglon = $resultado->fetch_array(MYSQLI_ASSOC)) {
                            echo "<tr>";
                            echo "<td>".$renglon['id_cliente']."</td>";
                            echo "<td>".$renglon['nombre_cliente']."</td>";
                            echo "<td>".$renglon['direccion_cliente']."</td>";
                            echo "<td>".$renglon['telefono_cliente']."</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>


    </div>

   
    

     
    


    <script>
        document.getElementById('altaClienteForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Evitar que el formulario se envíe normalmente
            var formData = new FormData(this);

            // Enviar los datos del formulario usando AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'ClientesAltaBD.php', true);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    // Mostrar el mensaje de éxito
                    alert('Cliente creado exitosamente');
                    // Actualizar la página
                    window.location.href = 'clientealta.php';
                } else {
                    // Manejar errores si es necesario
                    alert('Error al crear el cliente');
                }
            };
            xhr.send(formData);
        });
    </script>
</body>
</html>
