<?php
    try{
        $con = new PDO("mysql:host=localhost;dbname=crud",'root','');

        $vID = $_POST['id'];

        $query = "DELETE FROM producto WHERE id_producto = '$vID'";
        $consulta = $con -> prepare($query);

        if($consulta -> execute())
        {
            $resultado = $consulta -> rowCount();
            if($resultado > 0)
            {
                $msg = "El producto id = ".$vID." ha sido eliminado";
            }
            else{
                $msg = "Error, ID no valido."; 
            }
        }
        else{
            $msg = "Eror al ejecutar la consulta";
        }
    }catch(PDOException $ex)
    {
        $msg = "No se ha podido establecer la conexión a la base de datos";
        echo $ex->getMessage();
    }
    echo json_encode($msg);
    $con -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>