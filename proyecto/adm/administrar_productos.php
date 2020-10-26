<?php 
require_once '../conexion.php';

    $sql="SELECT * FROM productos";
    $listado=$conn->query($sql);
    $listado_c=mysqli_query($conn,$sql)
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/style1.css">
    <style>
        h1{
            color: #A65B1A;
        }
        
    </style>
    <title>Documento</title>
</head>
<body>
    
<center>
        <form method="post" action="../controller/crud_productos/insertar.php" enctype="multipart/form-data"> 
            <br><h1 class="titulo_f">Nuevo Producto</h1>
            <br>
            <input type="text" placeholder="nombre del producto" required name="nombre_producto"><br>
            <input type="text" placeholder="marca" required name="marca"><br>
            <input type="int" placeholder="precio" required name="precio"><br>
            <input type="int" placeholder="unidad disponible" required name="unidad_dis"><br>
            <!-- <input type="int" placeholder="comprado_p" required name="comprado_p"><br> -->
            <textarea  required name="comentario">descripcion </textarea><br> 
            <input type="date" placeholder="fecha curso" required name="fecha_dis"><br><br>
            <!-- imagen -->
            <input type="file" name="image" placeholder="Enter email" required><br>
            <!--  -->
            <input class="boton" type="submit" name="Registrar" value="Registrar">
            <input class="boton" type="reset" name="Limpiar" value="Limpiar">
        </form>
        <input class="boton" type="submit" name="Imprimir" value="Imprimir" onclick="location.href='../controller/reportes_productos.php'">
        <a class="boton" href="../panel_de_control.php">volver</a><br>
<div class="datagrid">
<table >
<thead>
                <tr>
                    <th>ID</th>
                    <th>productos</th>
                    <th>marca</th>
                    <th>PRECIO</th>
                    <th>UNIDADES DISPONIBLES</th>
                    <th>FECHA</th>
                    <th>RESERVAS</th>
                    <th>COMPRADOS</th><!--REVISAR-->
                    <th>IMAGEN</th>
                    <th>ELIMINAR</th>
                    <th>MODIFICAR</th>
                </tr>
            </thead>
    <tbody>
        <?php
                if($listado->num_rows>0){
                    $ban=0;
                    while ($row=$listado_c->fetch_assoc()){
                        if ($ban%2==0) {
                        ?>
                            <tr>
                                <td><?php echo $row['id_producto'];?></td>
                                <td><?php echo $row['nombre_producto'];?></td>
                                <td><?php echo $row['marca'];?></td>
                                <td><?php echo $row['precio'];?></td>
                                <td><?php echo $row['unidad_dis'];?></td>
                                <td><?php echo $row['fecha_dis'];?></td>
                                <td><?php echo $row['reservas'];?></td>
                                <td><?php echo $row['comprado_p'];?></td>
                                <td><img src= "<?php "../controller/images/images/".$row['image']?>" alt="" width="50px" height="50px" ></td>
                                <td><a href="../controller/crud_productos/modificar.php? id=<?php echo $row['id_producto'];?>"><img src="../img/ico/editar.ico" alt=""></a></td>
                                <td><a href="../controller/crud_productos/eliminar.php? id=<?php echo $row['id_producto'];?>"><img src="../img/ico/eliminar.ico" alt=""></a></td>
                            </tr>
                        <?php        
                            $ban++;
                        }
                        else{   ?>
                            <tr class="alt">
                                <td><?php echo $row['id_producto'];?></td>
                                <td><?php echo $row['nombre_producto'];?></td>
                                <td><?php echo $row['marca'];?></td>
                                <td><?php echo $row['precio'];?></td>
                                <td><?php echo $row['unidad_dis'];?></td>
                                <td><?php echo $row['fecha_dis'];?></td>
                                <td><?php echo $row['reservas'];?></td>
                                <td><?php echo $row['comprado_p'];?></td>
                                <td><img src= "<?php echo "../controller/crud_productos/images/".$row['image']?>" alt="" width="50px" height="50px" ></td>
                                <td><a href="../controller/crud_productos/modificar.php? id=<?php echo $row['id_producto'];?>"><img src="../img/ico/editar.ico" alt=""></a></td>
                                <td><a href="../controller/crud_productos/eliminar.php? id=<?php echo $row['id_producto'];?>"><img src="../img/ico/eliminar.ico" alt=""></a></td>
                            </tr>
                            
                        <?php $ban++; }
                
                        
                    }
                }  
                else{
                    echo "No existen datos en la tabla";
                }
                $conn->close();
                ?>
            </tbody>
            
        </table>
</div><br><br>

            
        </body>
        </html>
        
        
        
