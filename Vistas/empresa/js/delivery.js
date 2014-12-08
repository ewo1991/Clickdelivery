$(function(){
    $('#t_mis_delivery').DataTable({
            "paging": true,
            "sPaginationType": "full_numbers",
            "bJQueryUI": true,
            "language": {
                "lengthMenu": "filas _MENU_ ",
                "zeroRecords": "No hay registros que coincidan con la busqueda",
                "info": "Mostrando _PAGE_ de _PAGES_ entradas",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtered from _MAX_ total records)"
            }
        }); 
    $('.detalle_delivery_class').click(function(){
        id_delivery=$(this).attr('id_delivery');
        $.post(base_url+'empresa/renderpartial_detalle_delivery','&id_delivery='+id_delivery,function(data){
           $("#detalle_delivery_div").empty().append(data);
       });
    });
    
    $('#entregado').click(function(){
        id_act_delivery=$(this).attr('id_act_delivery');
        $.post(base_url+'empresa/actualezar_delivery','&id_delivery='+id_act_delivery,function(data){
       });
    });
});
