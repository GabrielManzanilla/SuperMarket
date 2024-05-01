<!DOCTYPE html>
<html>
<head>
    <title>Alta de Productos</title>
</head>
<body>
    <h2>Alta de productos</h2>
    <form action="ProductosAltaBD.php" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Precio: <input type="text" name="precio"><br>
        <label>Id Categoría</label>
        <select name="idCat">
            <option value="0">Seleccione</option>
            <!-- Aquí se generan las opciones de categorías -->
            <?php
            include("../../index.php.php");
            $cat = "select * from categorias";
            $res_cat = mysqli_query($enlace, $cat);
            if (!$res_cat) {
                echo "Error en la consulta";
            }
            while ($renglonCat = $res_cat->fetch_array(MYSQLI_ASSOC)) {
                $idc = $renglonCat['id_categoria'];
                $desc = $renglonCat['nombre_categoria']; // Cambiado de DESCRIPCION a nombre_categoria
            ?>
                <option value="<?php echo $idc ?>"><?php echo $desc ?></option>
            <?php
            }
            ?>
        </select><br>
        <label>Id Proveedor</label>
        <select name="idProv">
            <option value="0">Seleccione</option>
            <!-- Aquí se generan las opciones de proveedores -->
            <?php
            $prov = "select * from proveedores";
            $res_prov = mysqli_query($enlace, $prov);
            if (!$res_prov) {
                echo "Error en la consulta";
            }
            while ($renglonProv = $res_prov->fetch_array(MYSQLI_ASSOC)) {
                $idp = $renglonProv['id_proveedor'];
                $nom = $renglonProv['nombre_proveedor'];
            ?>
                <option value="<?php echo $idp ?>"><?php echo $nom ?></option>
            <?php
            }
            ?>
        </select><br>
        <input type="submit" value="Guardar">
    </form>
    <br>
    <!-- Enlace para ir a la página de visualización de productos -->
    <label>Ver productos:</label>
    <a href="ProductoVerBD.php">Ver Productos</a>
</body>
</html>
