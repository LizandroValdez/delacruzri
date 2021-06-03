<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="../css/estilosindex.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="../js/crud.js"></script>
  </head>
<body>
    <div class="MenuLateral">
       <h3 class="BarraLateralTitulo">Menu</h3>
       <a href="" class="BarraLateralBoton"><?php echo $_SESSION['nombre'];?></a>
       <a href="" class="BarraLateralBoton">Opción 2</a> 
       <a href="" class="BarraLateralBoton">Opción 3</a>
       <a href="" class="BarraLateralBoton">Opción 4</a>
       <a href="" class="BarraLateralBoton" data-toggle="modal" data-target="#myModal">Cerar sesión</a>
    </div>

    <div class="Contenido">
      <p>
        <form class="box" action="" method="post">
                <h2>Abarrotes</h2>
                <fieldset>
                    <legend>Datos del producto</legend>
                    <div class = "datos row">
                        <div class = "txtbox form-floating col-sm-6 col-md-2 col-lg-2">
                            <input type="text" value="" class="form-control" id="id_producto" placeholder="###-###-##-##" disabled>
                            <label for="id">id</label>
                        </div>
                        <div class = "txtbox form-floating col-sm-6 col-md-5 col-lg-5">
                            <input type="text" value="" class="form-control" id="nombre" placeholder="###-###-##-##">
                            <label for="nombre">Nombre</label>
                        </div>
                        <div class = "txtbox form-floating col-sm-6 col-md-5 col-lg-5">
                            <input type="text" value="" class="form-control" id="categoria" placeholder="###-###-##-##">
                            <label for="categoria">Categoría</label>
                        </div>
                        <div class = "txtbox form-floating col-sm-6 col-md-4 col-lg-4">
                            <input type="text" value="" class="form-control" id="proveedor" placeholder="###-###-##-##">
                            <label for="proveedor">Proveedor</label>
                        </div>
                        <div class = "txtbox form-floating col-sm-6 col-md-4 col-lg-4">
                            <input type="text" value="" class="form-control" id="preciocomp" placeholder="###-###-##-##">
                            <label for="preciocomp">Precio de compra</label>
                        </div> 
                        <div class = "txtbox form-floating col-sm-6 col-md-4 col-lg-4">
                            <input type="text" value="" class="form-control" id="preciovent" placeholder="###-###-##-##">
                            <label for="preciovent">Precio de venta</label>
                        </div>
                    </div>
                </fieldset>
                <button action="../php/guardar.php" type = "button" class="btn btn-primary" id="Guardar" data-toggle="modal" data-target="#myModalGuardar">Guardar</button>
                <button type = "button" class="btn btn-secondary" id="AbrirEliminar" data-toggle="modal" data-target="#myModalEliminacion">Editar/Eliminar</button>
                <button type = "button" class="btn btn-secondary" id="Limpiar">Limpiar</button>
                <div>
                  <div id="data">
                    
                  </div>
                  <button action="../php/mostrardatos.php" type="button" class="btn btn-primary" id="MostrarDatos">Actualizar</button>
                </div>
        </form>
      </div>
    </p>
  </div>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog" aria-hidden="true">
     <div class="modal-dialog" role="document">  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Cierre de sesión</h4>
        </div>
        <div class="modal-body">
          <p>¿Desea cerrar sesión?</p>
        </div>
        <div class="modal-footer">
          <a href ="logout.php"><button class="btn btn-primary">Si</button></a>
          <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
      </div> 
     </div>
    </div>
    <!-- Modal eliminación -->
    <div id="myModalEliminacion" class="modal fade" role="dialog" aria-hidden="true">
     <div class="modal-dialog" role="document">  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar</h4>
        </div>
        <div class="modal-body">
        <form class="box" action="" method ="post"> 
          <div class = "txtbox col-sm-5 col-md-5 col-lg-5">
            <input class="form-control" id="id" placeholder="Ingrese id">           
          </div>
          <div class="modal-footer">
            <button type = "button" action="../php/buscar.php" id="Buscar" class="btn btn-info" data-dismiss="modal">Buscar</button>
            <button type = "button" class="btn btn-danger" data-toggle="modal" data-target="#myModalConfirmarEliminacion">Eliminar</button>
            <button class=" btn btn-default" data-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div> 
     </div>
    </div>
    <div id="myModalConfirmarEliminacion" class="modal fade" role="dialog" aria-hidden="true">
     <div class="modal-dialog" role="document">  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Confirmación</h4>
        </div>
        <div class="modal-body">
          <p>¿Esta seguro que desea eliminar el producto ingresado?</p>
        </div>
        <div class="modal-footer">
          <button type = "button" action="../php/eliminar.php" id="Eliminar"class="btn btn-primary" data-dismiss="modal">Confirmar</button>
          <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
      </div> 
     </div>
    </div>
  </body>
</html>