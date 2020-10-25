<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/style1.css">
    <title>Modificar</title>
    
<head>
<body>
<center>
    <br><br>
<?php
require_once("../conexion.php");
$id=$_REQUEST['id'];
echo "id=".$id;
$sql="SELECT id_usuario from usuarios where id_usuario='$id'";
$result=$conn->query($sql);//alternativa
if($reg=mysqli_fetch_array($result)){
    $sql=("DELETE FROM usuarios where id_usuario='$id'");
$result=$conn->query($sql);
echo "<h1>Se borró correctamente</h1><br>";
?>
<!-- <script language="javascript">
alert("ELIMINACIÓN EXITOSA);
</script> -->
<?php
    echo "<a class=\"boton\" href=\"../adm/lista_usuarios.php\">Regresar</a><br>";
    
    }else{
        echo"<h1>No hay elementos</h1><br>";
        echo "<a class=\"boton\" href=\"../adm/lista_usuarios.php\">Regresar</a><br>";
    }$conn->close();
?>


</body>
</html>