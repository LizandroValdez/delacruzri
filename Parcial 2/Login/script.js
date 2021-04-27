$(document).ready(function(){

    $('#submit').click(function(){
 
        var usuario = $('#usuario').val();
        var contraseña = $('#contraseña').val();
        if(usuario == 'admin' && contraseña == 'admin')
        {
            $('#myModal').modal('show');
        }
        else{
            $('.modal-body').html("Error!");
            $('#myModal').modal('show');

        }
        
    });
});