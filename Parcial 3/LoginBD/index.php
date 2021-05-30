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
    <link rel="stylesheet" href="estilosindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
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
        <h2>Titulo</h2>
        <p>ELorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis. Nunc sed augue lacus viverra vitae congue eu consequat. Diam maecenas sed enim ut. Amet est placerat in egestas erat imperdiet sed euismod. Egestas erat imperdiet sed euismod nisi. Auctor elit sed vulputate mi sit amet mauris commodo. Interdum posuere lorem ipsum dolor sit amet consectetur. Aenean et tortor at risus viverra adipiscing. Vel risus commodo viverra maecenas accumsan. Vitae aliquet nec ullamcorper sit amet risus nullam.

            Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non. Imperdiet massa tincidunt nunc pulvinar sapien. Lectus quam id leo in vitae turpis massa sed. Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum. Aliquet sagittis id consectetur purus ut. Eu nisl nunc mi ipsum faucibus. Ac turpis egestas sed tempus urna et pharetra. Quam vulputate dignissim suspendisse in est. Vulputate mi sit amet mauris commodo quis imperdiet. Viverra nibh cras pulvinar mattis. Sed adipiscing diam donec adipiscing tristique risus. Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Ipsum faucibus vitae aliquet nec ullamcorper sit amet risus nullam. Habitasse platea dictumst quisque sagittis.
            
            Enim tortor at auctor urna nunc id cursus. Leo duis ut diam quam. Viverra aliquet eget sit amet. Elit pellentesque habitant morbi tristique senectus et netus et malesuada. Lacus luctus accumsan tortor posuere ac ut consequat. Ac tortor vitae purus faucibus ornare suspendisse sed nisi. Ac turpis egestas integer eget aliquet nibh praesent tristique magna. Magna fringilla urna porttitor rhoncus dolor purus non enim. Vestibulum lectus mauris ultrices eros in cursus turpis. Ut venenatis tellus in metus vulputate eu scelerisque felis.
            
            Nunc aliquet bibendum enim facilisis gravida neque convallis a. Enim tortor at auctor urna nunc id. Integer eget aliquet nibh praesent tristique magna sit amet purus. Morbi tempus iaculis urna id volutpat lacus laoreet non curabitur. Mauris pellentesque pulvinar pellentesque habitant morbi. Auctor neque vitae tempus quam pellentesque. Nisl pretium fusce id velit. Pharetra vel turpis nunc eget lorem dolor sed viverra ipsum. Quis lectus nulla at volutpat diam ut venenatis. Eu turpis egestas pretium aenean pharetra magna ac placerat. Nam libero justo laoreet sit amet cursus sit amet. Habitant morbi tristique senectus et netus et malesuada. Dolor sit amet consectetur adipiscing elit ut aliquam. Etiam non quam lacus suspendisse faucibus. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Amet tellus cras adipiscing enim eu turpis egestas pretium aenean. Facilisi cras fermentum odio eu feugiat pretium. In est ante in nibh mauris cursus mattis. Scelerisque fermentum dui faucibus in ornare quam viverra. Auctor urna nunc id cursus metus aliquam eleifend mi in.
            
            Id ornare arcu odio ut sem nulla pharetra. Leo urna molestie at elementum eu facilisis sed. Nisl rhoncus mattis rhoncus urna neque viverra justo. Accumsan in nisl nisi scelerisque eu ultrices vitae. Quis risus sed vulputate odio ut enim blandit volutpat. Mauris cursus mattis molestie a iaculis at erat. Sit amet purus gravida quis. Senectus et netus et malesuada. Quis commodo odio aenean sed adipiscing diam donec adipiscing tristique. In mollis nunc sed id semper risus in. Vel eros donec ac odio. Auctor eu augue ut lectus arcu bibendum at. Imperdiet nulla malesuada pellentesque elit eget gravida cum sociis. Urna condimentum mattis pellentesque id nibh tortor id aliquet. Semper quis lectus nulla at volutpat diam. Hendrerit dolor magna eget est lorem ipsum dolor sit. Vitae sapien pellentesque habitant morbi tristique senectus. Nullam vehicula ipsum a arcu cursus. Lectus mauris ultrices eros in cursus turpis massa tincidunt dui. Sit amet cursus sit amet dictum sit.</p>
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
</body>
</html>