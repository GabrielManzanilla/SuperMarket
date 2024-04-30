<!DOCTYPE html>
<html>

<head>
    <title>Menú Principal</title>
    <style>
        /* Estilos para el cuerpo de la página */
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            /* Color de fondo */
            margin: 0;
            padding: 0;
        }

        /* Estilos para la barra de navegación */
        .navbar {
            background-color: #00038F;
            /* Color de fondo */
            text-align: center;
            /* Centra el contenido */
            top: 0;
            left: 0;
            width: 100%;
        }

        /* Estilos para los enlaces en la barra de navegación */
        .navbar a {
            display: block;
            color: #fff;
            /* Color del texto */
            text-align: center;
            padding: 24px 20px;
            text-decoration: none;
            font-size: 24px;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
        }

        /* Pantalla Principal */
        .home {
            text-align: center;
            margin-top: 50px;

        }

        .container {
            width: auto;
            height: 450px;
            margin-top: 50px;
            padding-left: 100px;
            padding-right: 100px;
            padding-top: 10px;

            justify-content: center;
            align-items: center;

            display: grid;
            grid-template-columns: 400px 400px 400px;
            grid-template-rows: auto;
            grid-gap: 20px;

        }

        .item {
            height: 350px;
            width: 350px;
            background-color: #8c8c8c;
            font-weight: bold;
            justify-content: center;
            justify-self: center;
            align-items: center;
            display: flex;
            border-radius: 15px;
        }

        .item:hover {
            height: 370px;
            width: 370px;
            background-color: #00038F;
            font-weight: bold;
        }

        .item:hover div{
            color: #fff;
        }

        .item a {
            color: inherit;
            text-decoration: none;
            font-size: 40px;
        }

        .icon {
            width: 300px;
            height: 300px;
        }

        .submenu {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 150;
        }

        .content{
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            background-color: gray;
            display: grid;
            z-index: 99;
            grid-gap: 10px;
        }
        .option{
            color: #00038F;

        }
        .option:hover{
            color: white;
            background-color: #00038F;
        }

        .close{
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .submenu: hover {
            
        }
        /* Estilos al pasar el ratón sobre los enlaces */
        /* Estilos para la barra lateral */


    </style>
</head>

<body>
    <!-- Barra de navegación con el título "Super Aki" -->
    <div class="navbar">
        <a href="#" class="title-Super">THE MARKET</a>
    </div>

    <div class="home">
        <h1>Bienvenido a "THE MARKET" Admins</h1>

        <div class="container">
            <div class="item">
                <div onclick="mostrarClientes()">
                    <img src="src/img/user.svg" alt="" class="icon">
                    <div>Clientes</div>
                </div>
                <div class="submenu" id="popupClient">
                    <div class="content">
                        <button class="close" onclick="cerrarClientes()">X</button>
                        <a href="src/pages/clientes/clientealta.php" class="option">Alta de Clientes</a>
                        <a href="src/pages/clientes/ClientesEliminar.php" class="option">Eliminar Clientes</a>
                        <a href="src/pages/clientes/ClientesModificar.php" class="option">Modificar Clientes</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div onclick="mostrarProductos()">
                    <img src="src/img/bag.svg" alt="" class="icon">
                    <div>Productos</div>
                </div>
                <div class="submenu" id="popupProductos">
                    <div class="content">
                        <button class="close" onclick="cerrarProductos()">X</button>
                        <a href="src/pages/productos/ProductosAlta.php" class="option">Alta de Productos</a>
                        <a href="src/pages/productos/ProductoVerBD.php" class="option">Ver Productos</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <a href="#">
                    <img src="src/img/truck.svg" alt="" class="icon">
                    <div>Proveedores</div>
                </a>
            </div>
        </div>

    </div>
    <!-- Barra lateral con enlaces
     <div class="sidebar">
        <ul>
            <li>

                <a href="#">
                    <img src="img/icons8-usuario-50.png" alt="Ícono de usuario" style="width: 24px; height: 24px; margin-right: 10px;"> 
                    Alta de Clientes </a>
                    
                <div class="submenu">
                    <a href="clientes/clientealta.php">Alta de Clientes</a>
                    <a href="clientes/ClientesEliminar.php">Eliminar Clientes</a>
                    <a href="clientes/ClientesModificar.php">Modificar Clientes</a>
                </div>
            </li>

            <li><a href="productos/ProductosAlta.php">Alta de Productos</a></li>
            <li><a href="productos/ProductoVerBD.php">Ver Productos</a></li>
        </ul>
    </div> -->
</body>
<script>
    function mostrarClientes(){
        console.log('openMenu')
        document.getElementById("popupClient").style.display='block';
    }
    function cerrarClientes(){
        console.log('closed')
        document.getElementById("popupClient").style.display='none';
    }
    function mostrarProductos(){
        console.log('openMenu')
        document.getElementById("popupProductos").style.display='block';
    }
    function cerrarProductos(){
        console.log('closed')
        document.getElementById("popupProductos").style.display='none';
    }
</script>
</html>