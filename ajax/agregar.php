<?php
if(isset($_POST['NOMBRE'])&&isset($_POST['DESCRIP'])&&isset($_POST['TIPO_SUMINISTRO'])&&isset($_POST['PRECIO'])){
    include("conexion.php");
    $NOMBRE=$_POST['NOMBRE'];
    $DESCRIP=$_POST['DESCRIP'];
    $TIPO_SUMINISTRO=$_POST['TIPO_SUMINISTRO'];
    $PRECIO=$_POST['PRECIO'];
    $query="INSERT INTO MEDICAMENTO(NOMBRE,DESCRIP,TIPO_SUMINISTRO,PRECIO)VALUES('$NOMBRE','$DESCRIP','$TIPO_SUMINISTRO','$PRECIO')";
if(!$result=mysqli_query($con,$query)){
exit(mysqli_error($con));
}
echo "Se agrego el registro";
}
