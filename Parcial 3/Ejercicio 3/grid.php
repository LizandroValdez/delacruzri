<?php
try{
    $con = new PDO("mysql:host=localhost;dbname=delacruzri",'root','');

    $query = "select * from producto";
    $consulta = $con -> prepare($query);

    if($consulta -> execute())
    {
        $resultado = $consulta -> fetchall(PDO::FETCH_ASSOC);
    }
    else{
        $resultado = "Error al conectarse a la base de datos";
    }
}
catch(PDOException $ex){
    echo ("Error al conectarse a la base de datos ".$ex -> getMessage());
}
echo json_encode($resultado);
?>