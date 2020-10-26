<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
<?php
// require_once '../../helper/control_adm.php';
require_once '../../conexion.php';
if(isset($_POST)){
    // var_dump($_POST);
    // die();
    // if(isset($_SESSION)){}

        $nombre_producto = isset($_POST['nombre_producto']) ? mysqli_real_escape_string($conn, $_POST['nombre_producto']) : false;

        $marca = isset($_POST['marca']) ? mysqli_real_escape_string($conn, $_POST['marca']) : false;

        $comentario = isset($_POST['comentario']) ? mysqli_real_escape_string($conn, $_POST['comentario']) : false;

        $precio = isset($_POST['precio']) ? mysqli_real_escape_string($conn, $_POST['precio']) : false;

        $unidad_dis = isset($_POST['unidad_dis']) ? mysqli_real_escape_string($conn, $_POST['unidad_dis']) : false;

        $fecha_dis = isset($_POST['fecha_dis']) ? mysqli_real_escape_string($conn, $_POST['fecha_dis']) : false;

        // $comprado_p = isset($_POST['comprado_p']) ? mysqli_real_escape_string($conn, $_POST['comprado_p']) : false;
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
        
        // if(!empty($comprado_p)){
        //     $comprado_p_validado = true;
        // }else{
        //     $comprado_p_validado = false;
        //     $errores['comprado_p'] = "El comprado_p está vacío";
        // }

        // var_dump($errores);
        // die();
        $guardar_producto= false;

        
        if(count($errores) == 0){
            $guardar_producto= true;
            // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
            
            // $sql = "INSERT INTO productos VALUES(
            //     null, '$nombre_producto', '$marca', '$comentario', $precio, $unidad_dis, $fecha_dis, 0);";
            //REVISAR EL ERROR DE LA FECHA O COMO SE INSERTA LAS FECHAS
            $sql = "INSERT INTO productos VALUES(
                null, '$nombre_producto', '$marca', '$comentario', $precio, $unidad_dis, '$fecha_dis', 0, 0);";
            $guardar = mysqli_query($conn, $sql);
            // var_dump($sql);
            // var_dump($guardar);
            // die();
            if($guardar){
                $_SESSION['completado'] = "El registro se ha completado con éxito";
            }else{
                $_SESSION['errores']['general'] = "Fallo al guardar el usuario!!";
            }
            
	    }else{
        $_SESSION['errores'] = $errores;
        ?>
        <h1><strong> NO SE REGISTRO </strong></h1>
        <a class="boton" href="../../adm/administrar_productos">volver a registrar curso</a><br>
        <?php
        //header('Location: formulario.php');
    }
    if(!$errores){
?>


    
        <center>
    <h1><strong>SE AGREGO UN NUEVO CUERSO CORRECTAMENTE</strong></h1><br>
    <?php
    /// HACER EL CONTROL DE VOLVER AL MENU DE INICIO
    // require_once 'helper/control_par.php';
    // if ($w) {
    //     header('Location: panel_de_control.php');
    // }
    ?>
    <a class="boton" href="../../adm/administrar_productos">volver a registrar curso</a><br>
    
<?php
    }
    echo "<br><a class=\"boton\" href=\"../../index_.php\">inicio</a></center>";
}
?>
</body>
</html>