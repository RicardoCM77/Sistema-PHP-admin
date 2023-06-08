function agregar() {
    var NOMBRE = $("#NOMBRE").val();
    var DESCRIP = $("#DESCRIP").val();
    var TIPO_SUMINISTRO = $("#TIPO_SUMINISTRO").val();
    var PRECIO = $("#PRECIO").val();
    $.post("ajax/agregar.php", {
        NOMBRE: NOMBRE,
        DESCRIP: DESCRIP,
        TIPO_SUMINISTRO: TIPO_SUMINISTRO,
        PRECIO: PRECIO,
    }, function (data, status) {
        $("#add_new_record_modal").modal("hide");
        readRecords();
        $("#NOMBRE").val("");
        $("#DESCRIP").val("");
        $("#TIPO_SUMINISTRO").val("");
        $("#PRECIO").val("");
    });
}

function mostrar() {
    $.get("ajax/mostrar.php", {}, function (data, status) {
        $("#records_content").html(data);
    });
}

function borrar(ID_MEDICAMENTO) {
    var conf = confirm("Se va a borrar el archivo");
    if (conf == true) {
        $.post("ajax/borrar.php", {
            ID_MEDICAMENTO: ID_MEDICAMENTO
        }, function (data, status) {
            mostrar();
        });
    }
}

function online(ID_MEDICAMENTO) {
    $("#hidden_user_id").val(ID_MEDICAMENTO);
    $.post("ajax/online.php", {
        ID_MEDICAMENTO: ID_MEDICAMENTO
    }, function (data, status) {
        var user = JSON.parse(data);
        $("#ID_MEDICAMENTO").val(user.ID_MEDICAMENTO);
        $("#NOMBRE").val(user.NOMBRE);
        $("#DESCRIP").val(user.DESCRIP);
        $("#TIPO_SUMINISTRO").val(user.TIPO_SUMINISTRO);
        $("#PRECIO").val(user.PRECIO);
    });
    $("#update_user_modal").modal("show");
    console.log(object);
}

function actualizar() {
    var NOMBRE = $("#update_NOMBRE").val();
    var DESCRIP = $("#update_DESCRIP").val();
    var TIPO_SUMINISTRO = $("#update_TIPO_SUMINISTRO").val();
    var PRECIO = $("#update_PRECIO").val();
    var ID_MEDICAMENTO = $("#update_ID_MEDICAMENTO").val();

    $.post("ajax/actualizar.php", {
        ID_MEDICAMENTO: ID_MEDICAMENTO,
        NOMBRE: NOMBRE,
        DESCRIP: DESCRIP,
        TIPO_SUMINISTRO: TIPO_SUMINISTRO,
        PRECIO: PRECIO,
    },
        function (data, status) {
            $("#update_user_modal").modal("show");
            mostrar();
        });
    console.log(PRECIO);
}

$(document).ready(function () {
    mostrar();
});