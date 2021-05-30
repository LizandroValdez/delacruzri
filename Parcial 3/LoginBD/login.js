$(document).ready(function(){
    $('#submit').click(function(){
 
        var vusuario = $('#usuario').val();
        var vcontraseña = $('#contraseña').val();
        $.post('login.php',{usuario:vusuario, contraseña:vcontraseña},function(r){
        if(!r['msg'].includes("Error"))
        {
            $('#myModal .modal-body').html(r.msg);
            $('#myModal').modal('show');

            $('#myModal').on('hidden.bs.modal', function(){
                $(location).attr('href',"index.php");
            })
        }
        else{
            $('#myModal .modal-body').html(r.msg);
            $('#myModal').modal('show');
        }
    },'json');
});
});
