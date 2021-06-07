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

        #echo var_dump($res);
        if(password_verify($vContraseña,$res['password']))
        {
            $msg = "Bienvenido ".$res['nombre'];
            session_start();
            $_SESSION['usuario']=$res['usuario'];
            $_SESSION['nombre']=$res['nombre'];
        }
        else{
            $msg = "Error! Usuario o contrasena incorrecto";
        }
        $consulta->closeCursor();
    }
    catch(PDOException $ex)
    {
    $msg = $ex->getMessage();
    exit();
    }
    echo json_encode($msg);
    $con -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>