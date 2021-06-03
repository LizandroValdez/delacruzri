<?php
    try{
        $con = new PDO("mysql:host=localhost;dbname=crud",'root','');

        $vID = $_POST["id"];
        
        $query = "select * from producto where id_producto = $vID";
        $consulta = $con -> prepare($query);

        if($consulta -> execute())
        {
            $reg = $consulta -> fetch(PDO::FETCH_ASSOC);
        }
        else{
            $reg['msg'] = "Error al buscar";
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