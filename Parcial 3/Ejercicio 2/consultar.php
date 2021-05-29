<?php
    try{
        $con = new PDO("mysql:host=localhost;dbname=delacruzri",'root','');
        $query = "SELECT * FROM producto";
        $consulta = $con -> prepare($query);
        $consulta -> execute();
        $res = $consulta ->fetch(PDO::FETCH_ASSOC);

        print "<br>";

        printf("<b>ID               = </b> %s <br>", $res['id_producto']);
        printf("<b>Nombre           = </b> %s <br>", $res['nombre']);
        printf("<b>Precio de compra = </b> %s <br>", $res['prec_compra']);
        printf("<b>Precio de venta  = </b> %s <br>", $res['prec_venta']);
        printf("<b>Categoria        = </b> %s <br>", $res['categoria']);
        printf("<b>Proveedor        = </b> %s <br>", $res['proveedor']);

        print "<br><br><br>";

        $consulta->closeCursor();



    }catch(PDOException $e)
    {
        echo "No se ha podido establecer la conexion a la base de datos";
        echo $e->getMessage();
        exit();
    }
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>