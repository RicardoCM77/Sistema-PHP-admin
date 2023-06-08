<?php
if(isset($_POST['ID_MEDICAMENTO']) && isset($_POST['ID_MEDICAMENTO']) != "")
{
    include("conexion.php");

    $ID_MEDICAMENTO = $_POST['ID_MEDICAMENTO'];
    
    $query = "DELETE FROM MEDICAMENTO WHERE ID_MEDICAMENTO = '$ID_MEDICAMENTO'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
