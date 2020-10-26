<?php
require_once("../conexion.php");
$id=$_REQUEST['id'];
// echo "ID".$id;
$sql="SELECT * FROM usuarios where id_usuario='$id'";
$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/style1.css">
    <title>Modificar</title>
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
    <br>
    <center>
    <h1>Modificar</h1>
    <?php
    while($row=mysqli_fetch_assoc($result)){
    ?>
    <form method="post" action="actualizar.php">
        <div class="datagrid">
        <table border="1">
            <tr>
                <td>Id</td>
                <td><input type="text" name="id" value='<?php echo $row['id_usuario'];?>'></td>
                <!-- <td><label value='<?php //echo $row['id'];?>'><label for=""></label></td> -->
            </tr>
            <tr>
                <td>Nombres</td>
                <td><input type="text" name="nombre"value='<?php echo $row['nombres'];?>'></td>
            </tr>
            <tr>
                <td>Apellidos</td>
                <td><input type="text" name="apellidos" value='<?php echo $row['apellidos'];?>'></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="Email" name="email" value='<?php echo $row['email'];?>'></td>
            </tr>
            <tr>
                <td>Usaurio</td>
                <td><input type="text" name="usuario" value='<?php echo $row['usuario'];?>'></td>
            </tr>
            <tr>
                <td>Cedula</td>
                <td><input type="text" name="cedula" value='<?php echo $row['cedula'];?>'></td>
            </tr>
            <tr>
                <td>Pais</td>
                <td><input type="text" name="pais" value='<?php echo $row['pais'];?>'></td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td><input type="text" name="numero_cell" value='<?php echo $row['numero_cell'];?>'></td>
            </tr>
            <!-- <tr>
                <td>Género</td>
                <td>
                    <select name="genero" value='<?php //echo $row['genero'];?>'>
                        <option>hombre</option>
                        <option>mujer</option>
                    </select>
                </td>
            </tr> -->
            <tr>
                <td>Tipo de Usuario</td>
                <td>
                    <select name="tipo" value='<?php echo $row['tipo'];?>'>
                        <option>2</option>
                        <option>1</option>
                    </select>
                </td>
            </tr>
            
            
        </table>
        </div>
        <input class="boton" type="submit" value="Modificar"><br><br>
        <br><a class="boton" href="../adm/lista_usuarios.php">volver</a>
    </form>
<?php
}
?>
</center>
</body>
</html>
