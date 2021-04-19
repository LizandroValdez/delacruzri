$(document).ready(function(){
    $('#submit').click(function(){
        let usuario = $('#usuario').val();
        var contraseña = $('#contraseña').val();
        if(usuario == 'admin' && contraseña == 'admin')
        {
            alert("Has ingreado!");
            return;
        }
        else{
            alert("Error! datos incorrectos");
            return;
        }
    });
});