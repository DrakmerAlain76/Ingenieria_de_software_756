<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../style/style.css">
    <title>Perfil</title>
</head>
<body>
<center>
    <br><br>
<?php
require_once("../../conexion.php");
$id=$_REQUEST['id'];
$nombre_producto_el="SELECT * from productos where id_producto='$id'";
$sql1=mysqli_query($conn,$nombre_producto_el);

// $re=mysqli_fetch_array($sql1);
///////////////////////////////////////////
while($re = mysqli_fetch_array($sql1))
        {
            $img= $re['image'];
        }
        // var_dump($img);
        // die();

        if($img){
            unlink("images/".$img);
        }
        
///////////////////////////////////////////

//eliminar con el marca

echo "<h1>Se borró correctamente el producto</h1>";

$sql="SELECT id_producto from productos where id_producto='$id'";
$result=$conn->query($sql);//alternativa
if($reg=mysqli_fetch_array($result)){
    $sql=("DELETE FROM productos where id_producto='$id'");
$result=$conn->query($sql);
// echo "Se borró correctamente";
?>
<!-- <script language="javascript">
alert("ELIMINACIÓN EXITOSA);
</script> -->
<?php
    echo "<br><br><a class=\"boton\" href=\"../../adm/administrar_productos.php\">Regresar</a><br>";
    
    }else{
        echo"<h1>No hay elementos<h1><br><br>";
        echo "<a class=\"boton\" href=\"../../adm/administrar_productos.php\">Regresar</a><br>";
    }$conn->close();
?>
</center>
</body>
</html>