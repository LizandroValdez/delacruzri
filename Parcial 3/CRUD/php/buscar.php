<?php
    try{
        $con = new PDO("mysql:host=localhost;dbname=crud",'root','');

        $vID = $_POST["id"];
        
        $query = "select * from producto where id_producto = $vID";
        $consulta = $con -> prepare($query);

        if($consulta -> execute())
        {
            $registro = $consulta -> fetch(PDO::FETCH_ASSOC);
        }
        else{
            $registro['msg'] = "Error al buscar";
        }
    }catch(PDOException $ex)
    {
        $registro['msg'] = "No se ha podido establecer la conexión a la base de datos";
        echo $ex->getMessage();
    }
    $reg_encoded = array_map('utf8_encode',$registro);
    echo json_encode($reg_encoded);
    $con -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>