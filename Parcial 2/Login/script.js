$(document).ready(function(){

    $('#submit').click(function(e){
        var usuario = $('#usuario').val();
        var contraseña = $('#contraseña').val();
        if(usuario == 'admin' && contraseña == 'admin')
        {
            $("#myModal").show();
        }
        else{
            $("#myModal").show();
        }
        
    });
});