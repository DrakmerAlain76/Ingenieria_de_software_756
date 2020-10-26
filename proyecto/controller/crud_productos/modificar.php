<?php
require_once("../../conexion.php");
$id=$_REQUEST['id'];
// echo "ID".$id;
$sql="SELECT * FROM productos where id_producto='$id'";
$result=$conn->query($sql);
//alternativa
?>
<!DOCTYPE html>
<html>
    <head>
    <title>modificar</title>
    <link rel="stylesheet" type="text/css" href="../../style/style.css">
    <link rel="stylesheet" type="text/css" href="../../style/style1.css">
    <style>
        .datagrid{
            width: 25%;
        }
        /* .datagrid td tr{

        } */
        input[type="text"],
        input[type="email"],
        button{
            /* display:block; */
            padding-top: 10px;
        }
        h1{
            color: #A65B1A;
        }
    </style>
</head>
<body>
    <?php
    while($row=mysqli_fetch_assoc($result)){
    ?>
    <form method="post" action="actualizar.php">
        <center>
        <br>
        <h1>MODIFICAR CURSO</h1>
        <div class="datagrid">
        <table border="1">
            <tr>
                <td>Id</td>
                <td><input type="text" name="id_producto" value='<?php echo $row['id_producto'];?>'></td>
                <!-- <td><label value='<?php //echo $row['id'];?>'><label for=""></label></td> -->
            </tr>
            <tr>
                <td>Nombre curso</td>
                <td><input type="text" name="nombre_producto"value='<?php echo $row['nombre_producto'];?>'></td>
            </tr>
            <tr>
                <td>Marca</td>
                <td><input type="text" name="marca" value='<?php echo $row['marca'];?>'></td>
            </tr>
            <tr>
                <!-- configurar el tamaño de la caja -->
                <td>Comentario</td>
                <td><textarea  required name="comentario"><?php echo $row['comentario'];?></textarea></td>
                <!-- <td><input type="text" name="comentario" value='<?php //echo $row['comentario'];?>'></td>tareatex -->
            </tr>
            <tr>
                <td>precio</td>
                <td><input type="text" name="precio" value='<?php echo $row['precio'];?>'></td>
            </tr>
            <tr>
                <td>unidades disponibles</td>
                <td><input type="text" name="unidad_dis" value='<?php echo $row['unidad_dis'];?>'></td>
            </tr>
            <!-- <tr>
                <td>comprado_p</td>
                <td><input type="text" name="comprado_p" value='<?php echo $row['comprado_p'];?>'></td>
            </tr> -->
            <tr>
                <td>fecha curso</td>
                <td><input type="date" name="fecha_dis" value='<?php echo $row['fecha_dis'];?>'></td>
            </tr>
            
        </table>
        </div>
        <input class="boton" type="submit" value="Modificar"><br>
        <br><a class="boton" href="../../adm/administrar_productos.php">volver</a>
        </center>
    </form>
<?php
}
?>
</body>
</html>
