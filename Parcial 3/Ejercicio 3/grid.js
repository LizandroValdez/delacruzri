$('document').ready(function(){
    $.post('grid.php', function(r){
        $('#grid').jsGrid({
            width: "100%",
            height: "270px",
            inserting:true,
            editing:true,
            sorting: true,
            paging:true,
            pageIndex:1,
            pageSize:5,
            pagePrevText:"Anterior",
            pageNextText:"Siguiente",
            loadIndication: true,
            loadIndicationDelay: 500,
            loadMessage: "Por favor, espere...",
            confirmDeleting: true,
            deleteConfirm: "Esta seguro?",
            data: r,
            fields: [{name: "id_producto", type: "text", title: "ID", width: 50, validate:"requiered"},
                    {name:"nombre", type:"text", title:"Nombre", width:100},
                    {name:"prec_compra", type:"number", title:"Precio de compra", width:50},
                    {name:"prec_venta", type:"number", title:"Precio de venta", width:50},
                    {name:"categoria", type:"text", title:"Categoría", width:100},
                    {name:"proveedor", type:"text", title:"Proveedor", width:100},
                    {type:"control"}]
        });
    },'json');
});