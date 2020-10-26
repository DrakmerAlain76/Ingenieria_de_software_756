<?php
require_once 'conexion.php';
require_once 'helper/control_par.php';
// require_once 'helper/control_par.php';
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="style/main.css"> -->
    <link rel="stylesheet" type="text/css" href="style/fontawesome/css/all.min.css.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Inicio</title>
</head>
<body>
   
    <div class="imagen_de_fondo">
        <ul class="log_ul">
            <!-- <li class="logs"><a href=""><i class="fab fa-facebook-square"></i></a></li> -->
            <li class="logs"><a href=""><img src="img/ico/fb.ico" alt=""></i></a></li>
            <li class="logs"><a href=""><img src="img/ico/ins.ico" alt=""></i></a></li>
            <li class="logs"><a href=""><img src="img/ico/yt.ico" alt=""></i></a></li>
        </ul>
        <section id="letra_imgp">
            <h1 class="let_p">TIENDA VIRTUAL DE VENTAS DE COMPUTADORAS COMPUMUNDO</h1>
            
        </section>
    </div>


    <div>
        <?php 
        require_once ('view/menu_navegacion.php');
        ?>
    </div>
    <!-- <br> -->
    <hr>


    <div id="contenido">
        <center>
        
            <?php
                $sql_productos="SELECT id_producto,nombre_producto,marca,comentario,precio,fecha_dis,unidad_dis,image FROM productos";
                $lista = mysqli_query($conn, $sql_productos);
                while($respuesta = mysqli_fetch_assoc($lista)){
                    // nombres para la imagen de la base de datos

                    $name=$respuesta['nombre_producto'];
                    $image = $respuesta['image'];
                    ////////////////
                    echo "<section class=\"section_contenido\">";
                    echo "<center><h1 class=\"nombre_producto\">".$respuesta['nombre_producto']."</h1></center>";
                    echo "<labe1 class=\"marca\">"."Marca: ".$respuesta['marca']."</labe1><br>";
                    echo "<labe1 class=\"comentario\">"."Comentario: ".$respuesta['comentario']."</labe1><br>";
                    echo "<label class=\"precio\">"."Precio: ".$respuesta['precio']."$"."</label><br>";
                    echo "<label class=\"unidad_dis\">"."unidades disponibles: ".$respuesta['unidad_dis'].".</label><br><br>";
                    
                    ///////////////////////////
                    // IMAGEN
                    // var_dump($image);
                    ?>
                    <div><img src= "<?= "controller/crud_productos/images/".$image?>" alt="<?= $name ?>" width="100px" height="75px"></div><br>
                    <?php
                    
                    ///////////////////////////

                    
                    // LA RESERVA DEBE ESTAR AQUI, ESTO PARA CADA PRODUCTO 
                    if($w==2){
                    ?>
                        <div class="pedido">
                            <a class="reservar" href="carrito/reserva_c.php? id=<?php echo $respuesta['id_producto']?>">reservar </a>
                            <a class="comprar" href="compra/comprar.php? id=<?php echo $respuesta['id_producto']?>">comprar </a>
                        </div>
                        <!-- <a style="margin:45%"  href="reservar.php">reservar</a> -->
                    <?php
                    }
                    echo "</section>";
                }
            ?>
        </center>
    <?php
        // if($w==2){
        //     echo "<a style=\"margin:45%\"  href=\"reservar.php\">reservar</a>";
        // }
    ?>
    </div>
    <div class="limpiador">
        </div>
    <!-- <article id="barra_lateral">
        <h4>mas...</h4>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur numquam labore sint maxime ut eaque ab quam, cumque alias dolor autem suscipit tempora nobis explicabo porro officiis amet architecto quis!
        </p>
    
    </article> -->
    <!-- <footer id="pie_pagina">
        <hr>
        <label for="">pie de pagina</label>
    </footer> -->
</body>
</html>