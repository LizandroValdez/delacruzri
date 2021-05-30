<?php
    try{
        $con = new PDO("mysql:host=localhost;dbname=login",'root','');

        $vUsuario = $_POST['usuario'];
        $vContraseña = $_POST['contraseña'];

        // $vUsuario = "antonio";
        // $vContraseña = "delacruz";
        $query = "SELECT * FROM usuario WHERE usuario = '$vUsuario'";
        
        $consulta = $con ->prepare($query);
        $consulta -> execute();

        $res = $consulta -> fetch(PDO::FETCH_ASSOC);
        $n = $consulta -> rowCount();

        #echo var_dump($res);
        if(password_verify($vContraseña,$res['password']))
        {
            $reg['msg'] = "Bienvenido ".$res['nombre'];
            session_start();
            $_SESSION['usuario']=$res['usuario'];
            $_SESSION['nombre']=$res['nombre'];
        }
        else{
            $reg['msg'] = "Error! Usuario o contrasena incorrecto";
        }
        $consulta->closeCursor();
    }
    catch(PDOException $e)
    {
    echo "No se ha podido establecer la conexión a la base de datos";
    echo $e->getMessage();
    exit();
    }
    $reg_encoded = array_map('utf8_encode',$reg);
    echo json_encode($reg_encoded);
    $con -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>