<?php
include('./conexion.php');
if (isset($_POST)) {
    $ID_MEDICAMENTO = $_POST['ID_MEDICAMENTO'];
    $NOMBRE = $_POST['NOMBRE'];
    $DESCRIP = $_POST['DESCRIP'];
    $TIPO_SUMINISTRO = $_POST['TIPO_SUMINISTRO'];
    $PRECIO = $_POST['PRECIO'];
    $query = "UPDATE MEDICAMENTO SET NOMBRE='$NOMBRE', DESCRIP='$DESCRIP',
    TIPO_SUMINISTRO='$TIPO_SUMINISTRO', PRECIO='$PRECIO' WHERE ID_MEDICAMENTO='$ID_MEDICAMENTO'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
