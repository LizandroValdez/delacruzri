$('document').ready(function(){
    ActualizarTabla();
    $("#Limpiar").click(function(){
        $('.form-control').val('');
    });

    $('#Guardar').click(function(){
        var vID = $('#id_producto').val();
        var vNombre = $('#nombre').val();
        var vPrecioComp = $('#preciocomp').val();
        var vPrecioVent = $('#preciovent').val();
        var vCategoria = $('#categoria').val();
        var vProveedor = $('#proveedor').val();
        if(vNombre == "" || vPrecioComp == "" || vPrecioVent == "" || vCategoria == "" || vProveedor == "")
        {
            alert("Datos invalidos, revise los datos ingresados.");
        }
        else{
            $.post('../php/guardar.php',{id_producto:vID,nombre:vNombre,preciocomp:vPrecioComp,preciovent:vPrecioVent,categoria:vCategoria,proveedor:vProveedor},
            function(r){
                alert(r.msg);
            },'json');
            $('.form-control').val('');
            ActualizarTabla();
        }
    });

    $("#Eliminar").click(function(){
        var vID = $('#id').val();
        $.post('../php/eliminar.php',{id:vID},
        function(r){
            if(!r.msg.includes("Error"))
            {
                alert(r.msg);;
            }
            else{
                alert(r.msg)
            }
        },'json');
        ActualizarTabla();
    });

    $("#Buscar").click(function(){
        var vID = $('#id').val();
        $.post('../php/buscar.php',{id:vID},
        function(r){
            $("#id_producto").val(r['id_producto']);
            $("#nombre").val(r['nombre']);
            $("#categoria").val(r['categoria']);
            $("#proveedor").val(r['proveedor']);
            $("#preciocomp").val(r['prec_compra']);
            $("#preciovent").val(r['prec_venta']);
        },'json');
    });
    $("#MostrarDatos").click(function()
    {
        ActualizarTabla();
    });
    function ActualizarTabla()
    {
        $.post('../php/mostrardatos.php',function(r){
            $("#data").html(r);
        });
    }
});