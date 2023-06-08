<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title></title>
   <link href="dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>
   <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#">CLINICAL INDUSTRIES</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active"> <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a> </li>
            </ul>

            <form class="form-inline mt-2 mt-md-0">
               <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Busqueda">
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
            </form>
         </div>
      </nav>
   </header>

   <br>
   <br>

   <div class="container">
      <h3 class="mt-5">Sistema Compras</h3>
      <hr>
      <div class="row">
         <div class="col-12 col-md-12">
            <div class="da">
               <div class="row">
                  <div class="col-md-12">
                     <div class="pull-right">
                        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Agregar Campo</button>
                     </div>
                  </div>
               </div>

               <br>

               <div class="row">
                  <div class="col-md-12">
                     <div id="records_content"></div>
                  </div>
               </div>
            </div>

            <div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title">Agregar Campo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>

                     <div class="modal-body">
                        <div class="form-group">
                           <label for="NOMBRE">NOMBRE DEL MEDICAMENTO</label>
                           <input type="text" id="NOMBRE" value="" class="form-control" />
                        </div>

                        <div class="form-group">
                           <label for="DESCRIP">DESCRIPCION</label>
                           <input type="text" id="DESCRIP" value="" class="form-control" />
                        </div>

                        <div class="form-group">
                           <label for="TIPO_SUMINISTRO">TIPO DE SUMINISTRO</label>
                           <input type="text" id="TIPO_SUMINISTRO" class="form-control" value="" />
                        </div>

                        <div class="form-group">
                           <label for="PRECIO">PRECIO</label>
                           <textarea style="text-transform:uppercase" id="PRECIO" class="form-control"></textarea>
                        </div>
                     </div>

                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="agregar()">Agregar</button>
                     </div>
                  </div>
               </div>
            </div>

            <div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">

                     <div class="modal-header">
                        <h5 class="modal-title">Actualizar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>

                     <div class="modal-body">
                        <div class="form-group">
                           <label for="update_ID_MEDICAMENTO">ID_MEDICAMENTO</label>
                           <input type="text" id="update_ID_MEDICAMENTO" placeholder="ID_MEDICAMENTO" class="form-control" />
                        </div>

                        <div class="form-group">
                           <label for="update_NOMBRE">NOMBRE</label>
                           <input type="text" id="update_NOMBRE" placeholder="NOMBRE" class="form-control" />
                        </div>

                        <div class="form-group">
                           <label for="update_DESCRIP">DESCRIPCION</label>
                           <input type="text" id="update_DESCRIP" placeholder="DESCRIP" class="form-control" />
                        </div>

                        <div class="form-group">
                           <label for="update_TIPO_SUMINISTRO">TIPO DE SUMINISTRO</label>
                           <input type="text" id="update_TIPO_SUMINISTRO" placeholder="TIPO_SUMINISTRO" class="form-control" />
                        </div>

                        <div class="form-group">
                           <label for="update_PRECIO">PRECIO</label>
                           <input type="text" id="update_PRECIO" placeholder="PRECIO" class="form-control" />
                        </div>
                     </div>

                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="actualizar()">Guardar Cambios</button>
                        <input type="hidden" id="hidden_user_id">
                     </div>
                  </div>
               </div>
            </div>

            <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
            <script type="text/javascript" src="js/script.js"></script>
         </div>
      </div>
   </div>

   <footer class="footer">
      <div class="container"> <span class="text-muted">
            <p>Clinical Industries S.A. DE C.V.</p>
         </span>
      </div>
   </footer>
   <script src="dist/js/bootstrap.min.js"></script>

</body>

</html>