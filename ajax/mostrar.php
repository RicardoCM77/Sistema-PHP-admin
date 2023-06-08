<?php

include("conexion.php");


$data = '<table class="table table-bordered table-striped">
						<tr>
                        <th>ID_MEDICAMENTO</th>
                        <th>NOMBRE</th>
                        <th>DESCRIP</th>
                        <th>TIPO_SUMINISTRO</th>
                        <th style="width:700px">PRECIO</th>
						<th></th>
						<th></th>
						</tr>';

$query = "SELECT * FROM MEDICAMENTO";

if (!$result = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
}

if (mysqli_num_rows($result) > 0) {
    $number = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $data .= '<tr>

                <td>' . $row['ID_MEDICAMENTO'] . '</td>
                <td>' . $row['NOMBRE'] . '</td>
                <td>' . $row['DESCRIP'] . '</td>
                <td>' . $row['TIPO_SUMINISTRO'] . '</td>
                <td>' . $row['PRECIO'] . '</td>
				<td>
					<button onclick="actualizar(' . $row['ID_MEDICAMENTO'] . ')" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
				<td>
					<button onclick="borrar(' . $row['ID_MEDICAMENTO'] . ')" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
				</td>
    		</tr>';
        $number++;
    }
} else {

    $data .= '<tr><td colspan="6">No hay datos</td></tr>';
}

$data .= '</table>';

echo $data;
