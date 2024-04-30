<!DOCTYPE html>
<html>
<head>
    <title>Menú Principal</title>
    <style>
        /* Estilos para el cuerpo de la página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7; /* Color de fondo */
            margin: 0;
            padding: 0;
        }
        /* Estilos para la barra de navegación */
        .navbar {
            background-color: #28a745; /* Color de fondo */
            overflow: hidden;
            text-align: center; /* Centra el contenido */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000; /* Para estar por encima de la barra lateral */
        }
        /* Estilos para los enlaces en la barra de navegación */
        .navbar a {
            display: block;
            color: #fff; /* Color del texto */
            text-align: center;
            padding: 24px 20px;
            text-decoration: none;
            font-size: 18px;
        }
        /* Estilos al pasar el ratón sobre los enlaces */
        .navbar a:hover {
            background-color: #28a745; /* Color de fondo */
            color: #000000; /* Cambia el color del texto al pasar el ratón */
        }
        /* Estilos para la barra lateral */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 70px;
            left: 0;
            background-color: #CDCDCD; /* Color de fondo */
            padding-top: 20px;
            z-index: 999; /* Para estar debajo de la barra de navegación */
        }
        /* Estilos para la lista de la barra lateral */
        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 15px;
        }
        /* Estilos para los elementos de la lista en la barra lateral */
        .sidebar li {
            padding: 20px;
            position: relative; /* Para posicionar el submenú */
        }
        /* Estilos para los enlaces de la lista en la barra lateral */
        .sidebar li a {
            text-decoration: none;
            color: #000000; /* Color del texto */
            font-weight: bold;
            display: flex; /* Cambia a flexbox para alinear verticalmente */
            align-items: center; /* Alinea los elementos verticalmente */
        }
        /* Estilos al pasar el ratón sobre los elementos de la lista */
        .sidebar li:hover {
            background-color: #218838; /* Color de fondo */
        }
        /* Estilos para el submenú */
        .submenu {
            display: none; /* Oculta el submenú por defecto */
            position: absolute;
            top: 0;
            left: 100%;
            background-color: #CDCDCD; /* Color de fondo */
            padding: 10px;
            border-radius: 0 5px 5px 0; /* Ajusta la esquina del submenú */
        }
        /* Muestra el submenú cuando se pasa el ratón sobre el elemento padre */
        .sidebar li:hover .submenu {
            display: block;
        }
        /* Estilos para los elementos del submenú */
        .submenu a {
            display: block;
            color: #fff; /* Color del texto */
            text-decoration: none;
            padding: 5px 10px;
        }
        /* Estilos al pasar el ratón sobre los elementos del submenú */
        .submenu a:hover {
            background-color: #218838; /* Color de fondo */
        }
    </style>
</head>
<body>
    <!-- Barra de navegación con el título "Super Aki" -->
    <div class="navbar">
        <a href="#" class="title-Super">Super Aki</a>
    </div>

    <!-- Barra lateral con enlaces -->
    <div class="sidebar">
        <ul>
            <li>

                <a href="#">
                    <img src="img/icons8-usuario-50.png" alt="Ícono de usuario" style="width: 24px; height: 24px; margin-right: 10px;"> <!-- Agrega la imagen al enlace -->
                    Alta de Clientes </a>
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
</body>
</html>
