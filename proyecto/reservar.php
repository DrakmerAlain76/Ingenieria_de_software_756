<?php
require_once 'conexion.php';
    if(isset($_SESSION['usuario'])){
        $t=$_SESSION['usuario'];
        $usuario=$t['usuario'];
    }
    $id_c=$_GET['id'];
    $sql_productos="SELECT * FROM productos WHERE id_producto=$id_c";
    $result=mysqli_query($conn,$sql_productos);
    $row=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>RESERVAR</title>
</head>
<body>
    <?php
        
        // CONTROL DE REVERVA
        $consulta_de_reserva="SELECT * FROM reservaciones ";
        $a=false;
        if($consulta0=mysqli_query($conn,$consulta_de_reserva)){
            while($persona=mysqli_fetch_assoc($consulta0)){
                    if($usuario==$persona['usuario_res']&&$row['nombre_producto']==$persona['producto_res']){//revisar
                        $a=true;
                        echo "<h1>Usted ya tiene reservado</h1>";
                    break;
                    }
            }
        }
        //RESERVA
        if(!$a){
            $unidad_dis=(int)$row['unidad_dis'];
            $numero_reserva=(int)$row['reservas'];//converte a entero
            $curso_a_reservar=$row['nombre_producto'];
            $b=true;
            if ($numero_reserva<=$unidad_dis) {//control de manera general de los tres productos
                $numero_reserva++;
                $reservaciones = "INSERT INTO reservaciones VALUES(null, '$usuario', '$curso_a_reservar',CURDATE(),CURRENT_TIME());";
                $reserva1="UPDATE `productos` SET `reservas`=$numero_reserva WHERE id_producto=$id_c";//del producto 
                $consulta1 = mysqli_query($conn, $reservaciones);
                $consulta2 = mysqli_query($conn, $reserva1);
                $b=true;
            }
            else{
                $b=false;
                echo "<h1>espere a la proxima</h1>";
            }
            if($b){echo "<h1>FELICIDADES... usted reservo una plaza para su producto </h1>";}
        }
    ?>
    <br>
    <a href="index_.php">volver</a>
</body>
</html>