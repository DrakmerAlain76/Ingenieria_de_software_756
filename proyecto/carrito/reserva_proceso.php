<?php
require_once '../conexion.php';
    if(isset($_SESSION['usuario'])){
        $t=$_SESSION['usuario'];
        $usuario=$t['usuario'];
    }

    $id_c=$_GET['id_'];
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
    <title>RESERVAR</title>
</head>
<body>
<?php require_once ('../view/menu_navegacion_us.php'); ?>

<?php
        
        
        // CONTROL DE REVERVA



        
        $consulta_de_reserva="SELECT * FROM reserva";
        $a=false;
        if($consulta0=mysqli_query($conn,$consulta_de_reserva)){
            while($persona=mysqli_fetch_assoc($consulta0)){
                    //*/**/revisar */
                    
                    // var_dump($row);// lista de productos
                    // var_dump($row['comprado_p']); //comprado_p del curso
                    // var_dump($row['id_producto']);
                    // var_dump($persona);
                    // var_dump($persona['id_producto']);
                    // var_dump($persona['comprado']);
                    // var_dump($usuario);
                    // var_dump($persona);

                    // var_dump($usuario==$persona['usuario_res']&&$row['comprado_p']==$persona['comprado']);
                    // die();

                    // if($usuario==$persona['usuario_res']&&$row['comprado_p']==$persona['comprado']){//revisar

                    if($usuario==$persona['usuario_res']&&$row['id_producto']==$persona['id_producto']){//revisar
                        $a=true;
                        echo "<center><h1>Usted ya tiene reservado</h1></center>";
                        echo "<center><h1>si pulsa CANCELAR RESERVA, se cancelara su reserva</h1></center>";
                        // die();
                    break;
                    }
            }
        }
        if(!$a){
            $unidad_dis=(int)$row['unidad_dis'];
            $numero_reserva=(int)$row['reservas'];//converte a entero
            $curso_a_reservar=$row['nombre_producto'];
            $b=true;
            $comprado_p_curso=$row['comprado_p'];
            if ($numero_reserva<=$unidad_dis) {
                $numero_reserva++;

                $reservaciones = "INSERT INTO reserva VALUES(null, '$usuario', '$curso_a_reservar',CURDATE(),CURRENT_TIME(),1,$comprado_p_curso,0,$id_c,'no');";
                // $reservaciones = "INSERT INTO reserva VALUES(null, '$usuario', '$curso_a_reservar',CURDATE(),CURRENT_TIME(),1,$comprado_p_curso,0);";

                $reserva1="UPDATE `productos` SET `reservas`=$numero_reserva WHERE id_producto=$id_c";//del producto 
                $consulta1 = mysqli_query($conn, $reservaciones);
                $consulta2 = mysqli_query($conn, $reserva1);
                $b=true;
            }
            else{
                $b=false;
                echo "<center><h1>espere a la próxima</h1></center>";
            }
            if($b){echo "<center><h1>FELICIDADES... usted reservo una plaza para su producto  </h1></center>";}
        }
    ?>
    <center><br><a class="boton" href="../index_.php">volver</a></center>
    </body>
</html>