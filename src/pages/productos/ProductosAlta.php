<!DOCTYPE html>
<html>

<head>
    <title>Alta de Productos</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body class="body">
    <?php include '../../components/header.php'; ?>
    
    <div class="main">
        <div class="form">

            <h2>Alta de productos</h2>
            <form action="ProductosAltaBD.php" method="post">
                <label>Nombre:</label>
                <input type="text" name="nombre"><br>
                <label>Precio:</label> 
                <input type="text" name="precio"><br>
                <label>Id Categoría</label>
        
                <select name="idCat">
                    <option value="0">Seleccione</option>
                    <!-- Aquí se generan las opciones de categorías -->
                    <?php
                    include ("../../conectar.php");
                    $cat = "SELECT * FROM categorias";
        
                    try {
                        $res_cat = mysqli_query($enlace, $cat);
                        if (!$res_cat) {
                            throw new Exception("Error en la consulta: " . mysqli_error($enlace));
                        }
        
                        while ($renglonCat = $res_cat->fetch_array(MYSQLI_ASSOC)) {
                            $idc = $renglonCat['id_categoria'];
                            $desc = $renglonCat['nombre_categoria']; // Cambiado de DESCRIPCION a nombre_categoria
                            ?>
                            <option value="<?php echo $idc ?>"><?php echo $desc ?></option>
                            <?php
                        }
                    } catch (Exception $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    ?>
                </select><br>
        
                <label>Id Proveedor</label>
                <select name="idProv">
                    <option value="0">Seleccione</option>
                    <!-- Aquí se generan las opciones de proveedores -->
                    <?php
                    $prov = "SELECT * FROM proveedores";
        
                    try {
                        $res_prov = mysqli_query($enlace, $prov);
                        if (!$res_prov) {
                            throw new Exception("Error en la consulta: " . mysqli_error($enlace));
                        }
        
                        while ($renglonProv = $res_prov->fetch_array(MYSQLI_ASSOC)) {
                            $idp = $renglonProv['id_proveedor'];
                            $nom = $renglonProv['nombre_proveedor'];
                            ?>
                            <option value="<?php echo $idp ?>"><?php echo $nom ?></option>
                            <?php
                        }
                    } catch (Exception $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    ?>
                </select><br>
        
                <input type="submit" value="Guardar">
            </form>
            <br>
            <!-- Enlace para ir a la página de visualización de productos -->
            <label>Ver productos:</label>
            <a href="ProductoVerBD.php">Ver Productos</a>
        </div>

    </div>
</body>
</html>