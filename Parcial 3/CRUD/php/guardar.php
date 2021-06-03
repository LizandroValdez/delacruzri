<?php
    try{
        $con = new PDO("mysql:host=localhost;dbname=crud",'root','');

        $vNombre = $_POST["nombre"];
        $vPrecioComp = $_POST["preciocomp"];
        $vPrecioVent = $_POST["preciovent"];
        $vCategoria = $_POST["categoria"];
        $vProveedor = $_POST["proveedor"];

        if($_POST["id_producto"] != "")
        {
            $vID = $_POST["id_producto"];

            $query = "UPDATE producto set nombre ='$vNombre',prec_compra = $vPrecioComp, prec_venta = $vPrecioVent, 
            categoria = '$vCategoria', proveedor = '$vProveedor' where id_producto = $vID";
            
        }
        else{
            $query = "INSERT INTO producto (nombre,prec_compra,prec_venta,categoria,proveedor) values ('$vNombre',$vPrecioComp,$vPrecioVent,'$vCategoria','$vProveedor')";
        }
        $consulta = $con -> prepare($query);
    
        if($consulta -> execute())
        {
            $reg['msg'] = "El producto ".$vNombre." del proveedor ".$vProveedor." ha sido guardado";
        }
        else{
            $reg['msg'] = "Error al guardar";
        }
    }catch(PDOException $e)
    {
        $reg['msg'] = "No se ha podido establecer la conexión a la base de datos";
        echo $e->getMessage();
    }
    $reg_encoded = array_map('utf8_encode',$reg);
    echo json_encode($reg_encoded);
    $con -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>