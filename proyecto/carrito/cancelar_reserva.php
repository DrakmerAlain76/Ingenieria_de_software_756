<?php
require_once '../conexion.php';
    if(isset($_SESSION['usuario'])){
        $t=$_SESSION['usuario'];
        $usuario=$t['usuario'];
    }
    //ES DE CANCELAR LA RESERVA//

    // var_dump($_GET['id_c']);
    $id_c=$_GET['id_c'];
    $id_p=$_GET['id_p'];
    // var_dump($id_c);die();
    $sql_productos="SELECT * FROM productos WHERE id_producto=$id_c";
    $result=mysqli_query($conn,$sql_productos);
    $row=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>CANCELAR RESERVA</title>
</head>
<body>
<?php require_once ('../view/menu_navegacion_us.php'); ?>    

<?php


        

        // CONTROL DE CANCELAR RESERVA
    
        // eliminar
        //$unidad_dis=(int)$row['unidad_dis'];//
        $numero_reserva=(int)$row['reservas'];//converte a entero
        // $curso_a_reservar=$row['nombre_producto'];//
        //$comprado_p_curso=$row['comprado_p'];//
        
        $numero_reserva--;//
        
        
        
        $b=true;//
        $eliminar_reserva = "DELETE FROM reserva where id_res='$id_p'";//
        
        //COMO CONCEGUIR EL ID DE RESERVA 
        
        // var_dump($eliminar_reserva);
        // die();
        // $reservaciones = "INSERT INTO reserva VALUES(
            // null, '$usuario', '$curso_a_reservar',CURDATE(),CURRENT_TIME(),1,$comprado_p_curso,0);";//
        $reserva1="UPDATE `productos` SET `reservas`=$numero_reserva WHERE id_producto=$id_c";//del producto 
        // die();
                $consulta1 = mysqli_query($conn, $eliminar_reserva);//
                $consulta2 = mysqli_query($conn, $reserva1);//
                $b=true;//
            
                
        
    ?>
    <center><h1>se canceló el productoreservado</h1></center>
    <center><br><a class="boton" href="../index_.php">volver</a></center>
    </body>
</html>