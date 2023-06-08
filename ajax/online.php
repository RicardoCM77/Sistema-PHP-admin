<?php
include("conexion.php");
if(isset($_POST['ID_MEDICAMENTO']) && $_POST['ID_MEDICAMENTO']!="")
{
    $ID_MEDICAMENTO=$_POST['ID_MEDICAMENTO'];
    $query="SELECT * FROM MEDICAMENTO WHERE ID_MEDICAMENTO='$ID_MEDICAMENTO'";
    $result=mysqli_query($con,$query);
    if(!$result){
        exit(mysqli_error($con));
    }
    $response=array();
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $response=$row;
        }
    }else{
        $response['status']=200;
        $response['message']="No se encontraron resultados";
    }
    echo json_encode($response);
}
else{
    $response['status']=200;
    $response['message']="No se proporcionó el ID del medicamento";
    echo json_encode($response);
}
