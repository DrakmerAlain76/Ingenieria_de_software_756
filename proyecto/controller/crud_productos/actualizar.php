<?php
// require_once '../../helper/control_adm.php';
require_once '../../conexion.php';
if(isset($_POST)){
    // var_dump($_POST);
    // die();
    // if(isset($_SESSION)){}
    
        $mensaje="";

        $nombre_producto = isset($_POST['nombre_producto']) ? mysqli_real_escape_string($conn, $_POST['nombre_producto']) : false;

        $marca = isset($_POST['marca']) ? mysqli_real_escape_string($conn, $_POST['marca']) : false;

        $comentario = isset($_POST['comentario']) ? mysqli_real_escape_string($conn, $_POST['comentario']) : false;

        $precio = isset($_POST['precio']) ? mysqli_real_escape_string($conn, $_POST['precio']) : false;

        $unidad_dis = isset($_POST['unidad_dis']) ? mysqli_real_escape_string($conn, $_POST['unidad_dis']) : false;

        // $comprado_p = isset($_POST['comprado_p']) ? mysqli_real_escape_string($conn, $_POST['comprado_p']) : false;


        $fecha_dis = isset($_POST['fecha_dis']) ? mysqli_real_escape_string($conn, $_POST['fecha_dis']) : false;
        // var_dump($fecha_dis);

    // die();
        $errores = array();

        if(!empty($nombre_producto) /*&& !is_numeric($nombre_producto) /*&& !preg_match("/[0-9]/", $nombre_producto)*/){
            $nombre_producto_validado = true;
        }else{
            $nombre_producto_validado = false;
            $errores['nombre_producto'] = "El nombre del productono es válido";
        }
        
        if(!empty($marca) && !is_numeric($marca) && !preg_match("/[0-9]/", $marca)){
            $apellidos_validado = true;
        }else{
            $marca_validado = false;
            $errores['marca'] = "El marca no son válido";
        }
        
        if(!empty($comentario) /*&& !is_numeric($comentario) && !preg_match("/[0-9]/", $comentario)*/){
            $comentario_validado = true;
        }else{
            $marca_validado = false;
            $errores['comentario'] = "El comentario no son válido";
        }
        //revisar esta parte
        if(!empty($precio)/*&& !is_numeric($precio)*/){
            $precio_validado = true;
        }else{
            $precio_validado = false;
            $errores['precio'] = "El precio está vacía";
        }
        
        // if(!empty($comprado_p)){
        //     $comprado_p_validado = true;
        // }else{
        //     $comprado_p_validado = false;
        //     $errores['comprado_p'] = "El comprado_p está vacío";
        // }

        if(!empty($unidad_dis)/*&& !is_numeric($unidad_dis)*/){
            $unidad_dis_validado = true;
        }else{
            $unidad_dis_validado = false;
            $errores['unidad_dis'] = "El campo unidad_dis está vacía";
        }
        
        if(!empty($fecha_dis)){
            $fecha_dis_V = true;
        }else{
            $fecha_dis_V = false;
            $errores['fecha_dis'] = "El campo fecha productoestá vacía";
        }
        
        $guardar_producto= false;
        // REVISAR ESTA PARTE DE LA INSERCION //
        $id=$_REQUEST['id_producto'];
        // var_dump($id);
        // die();
        $consulta=true;
        if(count($errores) == 0){
            $guardar_producto= true;
            
            // $sql2="UPDATE productos SET nombre_producto='$nombre_producto', marca='$marca', comentario='$comentario', precio=$precio, unidad_dis=$unidad_dis,/*fecha_dis=0, reservas=0 */WHERE id_producto=$id";
            // $sql2="UPDATE productos SET nombre_producto='$nombre_producto', marca='$marca', comentario='$comentario', precio=$precio, unidad_dis=$unidad_dis, fecha_dis='$fecha_dis', comprado_p=$comprado_p WHERE id_producto=$id";
            $sql2="UPDATE productos SET nombre_producto='$nombre_producto', marca='$marca', comentario='$comentario', precio=$precio, unidad_dis=$unidad_dis, fecha_dis='$fecha_dis' WHERE id_producto=$id";
            // var_dump($sql2);
            // die();
            // $guardar = mysqli_query($conn, $sql2);
            $consulta = $conn->query($sql2);
            ///////////////////////////// revisar esta parte
             

            if($consulta==true){
                $_SESSION['completado'] = "El registro se ha completado con éxito";
                $mensaje= "<br><center><h1>se actualizo<h1></center><br>"."<center><a class=\"boton\" href=\"../../adm/administrar_productos.php\">Regresar</a></center><br>";
            }else{
                $_SESSION['errores']['general'] = "Fallo al guardar el usuario!!";
                $mensaje= "<br><center><h1>se actualizo<h1></center><br>"."<center><a class=\"boton\" href=\"../../adm/administrar_productos.php\">Regresar</a></center><br>";
            }
            // var_dump($consulta);
            // var_dump($_SESSION['errores']['general']);
            // die();
	    }else{
        $_SESSION['errores'] = $errores;
        // var_dump($_SESSION['errores']);
        //     die();
        // $mensaje= "<center><h1>se actualizo<h1></center>"."<center><a href=\"../adm/lista_usuarios.php\">Regresar</a></center><br>";
        ?>
        <center><h1><strong> NO SE REGISTRO </strong></h1><br><br> -->
        
        <a class="boton" href="../../adm/administrar_productos">volver a registrar curso</a><br></center>
        <!--revisar si ingresa-->
        <?php
        //header('Location: formulario.php');
    }
    // if(!$errores){
        // echo $mensaje;
?>


    
    <!-- <h1><strong>SE ACTUALIZO CORREACTAMENTE</strong></h1> -->
    <?php
    /// HACER EL CONTROL DE VOLVER AL MENU DE INICIO
    // require_once 'helper/control_par.php';
    // if ($w) {
    //     header('Location: panel_de_control.php');
    // }
    ?>
    <!-- <a href="../../adm/administrar_productos"> VOLVER </a><br> -->
    
<?php
    // }
    // echo "<a href=\"../../index_.php\">inicio</a>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../style/style.css">
    <title>Perfil</title>
</head>
<body>
    <?php
    echo $mensaje;
    ?>
    
</body>
</html>