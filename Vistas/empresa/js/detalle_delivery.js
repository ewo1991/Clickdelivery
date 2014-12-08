$(function(){
    $('#t_detalle_delivery').DataTable({
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
        $('#ver_direccion').click(function(){
            direccion=$(this).attr('direccion');
            window.location=base_url+'empresa/direccion_cliente&direccion='+direccion;
        });
});
