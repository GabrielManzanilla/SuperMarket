<!DOCTYPE html>
<html>

<head>
    <title>Menú Principal</title>
    <link rel="stylesheet" href="src/css/style.css">
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