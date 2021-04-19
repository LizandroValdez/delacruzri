$(document).ready(function(){
    $('#submit').click(function(){
        let usuario = $('#usuario').val();
        var contraseña = $('#contraseña').val();
        if(usuario == 'admin')
        {
            if(contraseña == 'admin')
            {
                $(function(){
                    $("Has ingreado!").dialog();
                })
                swal({
                    title: "Log In", text: "Has ingreado!", icon: "success", button: "OK"
                });
            }
        }
    });
});