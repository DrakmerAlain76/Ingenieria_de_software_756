<?php
require_once"../conexion.php";
require_once('reporte/class.ezpdf.php');
$pdf = new Cezpdf('Carta');
 //seleccionamos tipo de hoja
 $pdf->selectFont('reporte/fonts/Helvetica.afm'); //seleccionamos fuente a utilizar
 $pdf->ezImage("emp.jpeg", 10, 150, 'none', 'left');
 $pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"),12);
 $pdf->ezText("<b>Hora:</b> ".date("h:i:s"),12);
 $pdf->ezText("<b>----Tabla productos-----</b>\n",18);
 $sql="SELECT * from productos";
 /**////revisar
 $result=$conn->query($sql);
 if($result->num_rows>0){
     while ($row=mysqli_fetch_array($result)) {
     $data[]=array(
        'id_producto'      =>$row[0],
        'nombre_producto'  =>$row[1],
        'marca'     =>$row[2],
        // 'comentario'    =>$row[3],
        'precio'         =>$row[4],
        'unidad_dis'         =>$row[5],
        'fecha_dis'   =>$row[6],
        'reservas'      =>$row[7],
        'comprado_p'      =>$row[8]
    );
}
}
 else{
     echo "Base de datos vacía";
}
$titles=array(
    'id_producto'=>'id_producto',
    'nombre_producto'=>'nombre_producto',
    'marca'=>'marca',
    // 'comentario'=>'comentario',
    'precio'=>'precio',
    'unidad_dis'=>'unidad_dis',
    'fecha_dis'=>'fecha_dis',
    'reservas'=>'reservas',
    'comprado_p'=>'comprado_p',
);
$pdf->ezTable($data);
ob_end_clean();
$pdf->ezStream();
$conn->close();
?>